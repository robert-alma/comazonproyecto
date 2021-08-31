<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\UsuarioModel;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout', 'bienvenido');
    }

    public function index()
    {
        return view('Login.index');
    }

    public function inicio()
    {
        return redirect(route('login'));
    }

    public function clave()
    {
        return view('Login.Clave.index');
    }

    public function login(Request $request)
    {

        $this->validateLogin($request);



        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function recuperar(Request $request)
    {
        $correo = $request->correo;
        $usuario = UsuarioModel::where('correo', '=', $correo)->get()[0];

        $pre = md5(md5(env('RECUPERAR')));
        $pro = substr(str_shuffle($pre), 0, 10);
        $usuario->password = bcrypt($pro);
        $usuario->update();


        return redirect('/')->withErrors(['status' => 'Credenciales enviadas, revisa tu correo.']);;
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->flestado == 1) {

            $user->setSession($user);

        } else {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('/')->withErrors(['status' => '¡Lo sentimos! Credenciales no válidas.']);
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/login');
    }

    public function username()
    {
        return 'usuario';
    }

    public function bienvenido()
    {
         if(session()->get('perfil_id') == 1){

             return redirect(route('cliente.index'));

         }elseif(session()->get('perfil_id') == 2){

             return redirect(route('ejecutivo.index'));
         }
         else{
            return redirect(route('login'));
         }

    }

}

