<section class="mb-5 bg-gray-900 text-gray-100 p-6 rounded-md shadow-lg">
  <table class="table-auto border-separate border-spacing-2 w-full">
    <thead>
      <tr class="bg-gray-800">
        <th class="border border-gray-700 px-4 py-2">Name</th>
        <th class="border border-gray-700 px-4 py-2">Email</th>
        <th class="border border-gray-700 px-4 py-2">Contact</th>
        <th class="border border-gray-700 px-4 py-2">Edit</th>
        <th class="border border-gray-700 px-4 py-2">Delete</th>
      </tr>
    </thead>

    <tbody>
      @if($this->contacts->isEmpty())
      <tr>
        <td colspan="5" class="text-center border border-gray-700 px-4 py-2 text-gray-400">
          There are no contacts here.
        </td>
      </tr>
      @else
      @foreach($this->contacts as $contact)
      <tr class="hover:bg-gray-800 transition duration-300">
        <td class="border border-gray-700 px-4 py-2">
          <a href="/contacts/{{$contact->id}}" wire:navigate class="underline underline-offset-3 hover:text-indigo-400 transition duration-300">
            {{$contact->name}}
          </a>
        </td>
        <td class="border border-gray-700 px-4 py-2">{{$contact->email_address}}</td>
        <td class="border border-gray-700 px-4 py-2">{{$contact->contact}}</td>
        <td class="border border-gray-700 px-4 py-2">
          <button wire:click="edit({{ $contact->id }})" class="p-2 rounded-md bg-green-500 text-white">
            Edit
          </button>
        </td>
        <td class="border border-gray-700 px-4 py-2">
          <button type="button" wire:confirm="Are you sure you want to delete this contact?" wire:click="delete({{ $contact->id }})"
            class="p-2 rounded-md bg-red-500 block text-white font-semibold hover:bg-red-600 transition duration-300">
            Delete
          </button>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>

  @if (session('status'))
  <div class="fixed right-4 bottom-4 bg-green-600 text-white font-bold px-4 py-3 rounded-md shadow-md animate-bounce">
    <p>
      {{ session('status') }}
    </p>
  </div>
  @endif
</section>