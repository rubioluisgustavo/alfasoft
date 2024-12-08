<section class="mb-5 bg-gray-900 text-gray-100 p-6 rounded-md shadow-lg">
  <h1 class="text-2xl mb-5 font-bold text-indigo-400 animate-fade-in">
    Contact Description
  </h1>
  <table class="table-auto border-separate border-spacing-2">
    <thead>
      <tr class="bg-gray-800">
        <th class="border border-gray-700 px-4 py-2">Name</th>
        <th class="border border-gray-700 px-4 py-2">Email Address</th>
        <th class="border border-gray-700 px-4 py-2">Contact</th>
        <th class="border border-gray-700 px-4 py-2">Edit</th>
        <th class="border border-gray-700 px-4 py-2">Delete</th>
      </tr>
    </thead>
    <tbody>
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
    </tbody>
  </table>
</section>