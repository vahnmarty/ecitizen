<div>
    <iframe
        width="100%"
        height="720"
        style="border:0"
        loading="lazy"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA18yuVb0sZNiZcb8miO69QKPdPMBySUNg
        &q=Iligan+City&zoom=12">
    </iframe>

    <div class="fixed inset-y-0 pr-32 right-0 min-w-[16rem] bg-transparent py-12 max-h-screen overflow-auto">
        <div class="grid grid-cols-1 gap-6">
            @foreach(range(1,5) as $rand)
            <div class="p-5 shadow-lg rounded-md  bg-white w-[28rem]">
                <div class="flex gap-8">
                    <div class="space-y-1">
                        <p class="font-bold">Alert #{{ rand(1000, 9000) }}</p>
                        <div class="flex w-full space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-green-600">
                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                              </svg>
                            <p>Zone Meteor, IISHAI, Suarez</p>
                        </div>
                        <div class="flex w-full space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              
                              
                            <p>5 seconds ago..</p>
                        </div>
                        <div class="flex w-full space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                              </svg>
                            <p>Anonymous</p>
                        </div>
                        <div class="flex space-x-2">
                            <div class="w-6 h-6 grow">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 grow">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                  </svg>
                            </div>
                            <div>
                                <div class="italic text-sm break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aperiam autem ex vel earum, .</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-14 h-14">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-14 h-14 text-red-700 grow animate-pulse">
                            <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177A7.547 7.547 0 016.648 6.61a.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 011.925-3.545 3.75 3.75 0 013.255 3.717z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>