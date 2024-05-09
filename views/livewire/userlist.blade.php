{{-- <div wire:poll.visible.10s class="p-5">
    <h3>Total users: </h3>

        <div class="rounded shadow-md flex-col">
            <div class="p-2 flex flex-row bg-gray-200 font-bold">
                <div class="w-2/4">Name</div>
                <div class="w-1/4">Email</div>
                <div class="w-1/4">Joined_at</div>
            </div>

            @foreach ($users as $user)
                <div class="p-2 flex flex-row">
                    <div class="w-2/4">{{$user->name}}</div>
                    <div class="w-1/4">{{$user->email}}</div>
                    <div class="w-1/4">{{$user->created_at}}</div>
                    <div><img src="{{'storage/'.$user->images}}" alt="" class="h-20 w-20"></div>
                </div>
            @endforeach

        </div>

    {{$users->links('vendor.livewire.custom')}}
</div> --}}

<div wire:poll.visible.10s class=" p-5 ">
    <h2 class="text-2xl mb-3">User List</h2>
    <input wire:model.live.debounce.500ms="search" type="text" placeholder="Search..." class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded p-2">

    @foreach ($users as $user)
                <div class="p-2 flex justify-between">
                    <div>
                        <div class="">{{$user->name}}</div>
                        <div class="text-sm">{{$user->email}}</div>
                    </div>
                    <button class="bg-cyan-700 px-2 py-1 rounded-md text-white hover:bg-cyan-200 hover:text-black">View</button>

                </div>
                <hr class="w-[80%]">
    @endforeach
    {{$users->links('vendor.livewire.custom')}}
</div>
