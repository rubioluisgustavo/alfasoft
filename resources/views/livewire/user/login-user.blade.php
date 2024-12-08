<section>
  <form wire:submit="login" method="post">
    @csrf

    <x-input type="text" name="email" id="email" wire:model.blur="email" label="Email" />
    <div class="mb-3">@error('email') {{ $message }} @enderror</div>

    <x-input type="password" name="password" id="password" wire:model.blur="password" label="Password" />
    <div class="mb-3">@error('password') {{ $message }} @enderror</div>

    <x-button text="Log In" />
  </form>

  @if (session('error'))
  <div class="mt-3">
    <p>{{session('error')}}</p>
  </div>
  @endif
</section>