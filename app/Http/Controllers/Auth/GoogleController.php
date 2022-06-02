<?php
  
  namespace App\Http\Controllers\Auth;
    
  use App\Http\Controllers\Controller;
  use Socialite;
  use Auth;
  use Exception;
  use App\User;
  use App\Role;
    
  class GoogleController extends Controller
  {
      /**
       * Create a new controller instance.
       *
       * @return void
       */
      public function redirectToGoogle()
      {
          return Socialite::driver('google')->redirect();
      }
        
      /**
       * Create a new controller instance.
       *
       * @return void
       */
      public function handleGoogleCallback()
      {
          try {
      
              $user = Socialite::driver('google')->user();
       
              $finduser = User::where('google_id', $user->id)->first();
       
              if($finduser){
       
                  Auth::login($finduser);
      
                  return redirect('/trivia/entrada');
       
              }else{
                  $newUser = User::create([
                      'name' => $user->name,
                      'email' => $user->email,
                      'google_id'=> $user->id,
                      'password' => encrypt('123456dummy'),
                      'estado' => 1
                  ]);
                  $roleuser =User::where('google_id', $user->id)->first();;
                  $user_superadmin = Role::where('name','participante')->first();
                  $roleuser->roles()->attach($user_superadmin);
      
                  Auth::login($newUser);
                  return redirect('/trivia/entrada');
              }
      
          } catch (Exception $e) {
              if(empty($e->getMessage())){
                   return redirect('auth/google');
              }else{
                   return redirect()->route('login.error') ;
              }
          }
      }

      public function error(){
          return view('error_login');
      }
  }