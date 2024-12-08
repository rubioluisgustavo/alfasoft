<section>
  <form wire:submit="save" method="post">
    @csrf

    <x-input type="text" name="name" id="name" wire:model.blur="name" label="Name" />
    <div class="mb-3">@error('name') {{ $message }} @enderror</div>

    <x-input type="text" name="email" id="email" wire:model.blur="email" label="Email" />
    <div class="mb-3">@error('email') {{ $message }} @enderror</div>

    <x-input type="password" name="password" id="password" wire:model.blur="password" label="Password" />
    <div class="mb-3">@error('password') {{ $message }} @enderror</div>

    <x-button text="Create" />
  </form>
</section>