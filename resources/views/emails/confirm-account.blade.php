@component('mail::message')
# Confirmation de compte
Hello Mr/Mme {{ $user->name}} votre a bien été creer veuillez cliquer sur le lien pour vous<br>
connectez avec les identifiants ci-dessous:
-email : {{$user->email}}
-Mot de passe : {{$mdp}}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
