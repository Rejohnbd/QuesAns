<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        if (Auth::user()->active_status) :
            $request->session()->regenerate();

            flash()->addSuccess('Loggine Successfully. Welcome ' . Auth::user()->name);

            if (Auth::user()->role->slug == "admin") :
                return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
            elseif (Auth::user()->role->slug == "client") :
                return redirect()->intended(RouteServiceProvider::CLIENT_HOME);
            elseif (Auth::user()->role->slug == "employee") :
                return redirect()->intended(RouteServiceProvider::HOME);
            endif;

        // return redirect()->intended(RouteServiceProvider::HOME);
        else :
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            flash()->addError('You are Inacive User. Please Contact with Authorize Person');
            return redirect('/');
        endif;
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        flash('Logout Successfully');
        return redirect('/');
    }
}
