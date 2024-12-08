<section>
  <form wire:submit="update" method="post">
    @csrf

    <x-input type="text" name="name" id="name" value="{{$name}}" wire:model.blur=" name" label="Name" />
    <div class="mb-3">@error('name') {{ $message }} @enderror</div>

    <x-input type="text" name="email_address" id="email_address" value="{{$email_address}}" wire:model.blur="email_address" placeholder="you@example.com" label="Email Address" />
    <div class="mb-3">@error('email_address') {{ $message }} @enderror</div>

    <x-input type="text" name="contact" id="contact" value="{{$contact}}" wire:model.blur="contact" label="Contact" placeholder="999999999" />
    <div class="mb-3">@error('contact') {{ $message }} @enderror</div>

    <x-button text="Save" />
  </form>
</section>