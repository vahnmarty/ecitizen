
<x-slot name="header">
    <header>
        <h1 class="text-3xl font-bold">Report an Emergency</h1>
    </header>
</x-slot>
<div class="py-4 bg-white">
    <div x-data="{ 
            type: @entangle('type'), 
            enable: true, 
            latitude: @entangle('latitude'), 
            longitude: @entangle('longitude'),
            address: @entangle('address').defer,
            scrollTo(id){
                document.getElementById(id).scrollIntoView({
                    behavior: 'smooth'
                });
            }
         }"
        class="wrapper">
        @if(!$is_done)
        <div>
            <p class="mb-2 ml-2 text-xl">You selected: <b>Fire</b></p>
            <form wire:submit.prevent="submit">
                <div class="grid grid-cols-2 gap-2 lg:grid-cols-6 lg:gap-6">
                    <label 
                        :class="type === '1' ? ' bg-red-500 scale-100 text-white' :  'duration-300 ease-in scale-90 text-red-700' "
                        class="flex flex-col items-center justify-center gap-3 p-8 bg-white border rounded-lg cursor-pointer hover:scale-100">
                        <x-heroicon-s-fire class="w-10 h-10 "/>
                        <p :class="type === '1' ? 'text-white font-bold' : 'text-gray-700' ">Fire</p>
                        <input type="radio" x-model="type" x-on:click="scrollTo('details')" value="1" class="hidden">
                    </label>
                    <div class="flex flex-col items-center justify-center gap-3 p-8 duration-300 ease-in scale-90 bg-white border rounded-lg cursor-pointer hover:scale-100">
                        <x-heroicon-o-truck class="w-10 h-10 text-blue-700"/>
                        <p>Accident</p>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-3 p-8 duration-300 ease-in scale-90 bg-white border rounded-lg cursor-pointer hover:scale-100">
                        <x-heroicon-o-newspaper class="w-10 h-10 text-yellow-700"/>
                        <p>Medical</p>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-3 p-8 duration-300 ease-in scale-90 bg-white border rounded-lg cursor-pointer hover:scale-100">
                        <x-heroicon-o-shield-exclamation class="w-10 h-10 text-green-700"/>
                        <p>Crime</p>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-3 p-8 duration-300 ease-in scale-90 bg-white border rounded-lg cursor-pointer hover:scale-100">
                        <x-heroicon-o-hand class="w-10 h-10 text-purple-700"/>
                        <p>Disaster</p>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-3 p-8 duration-300 ease-in scale-90 bg-white border rounded-lg cursor-pointer hover:scale-100">
                        <x-heroicon-o-ticket class="w-10 h-10 text-yellow-700"/>
                        <p>Other</p>
                    </div>
                </div>
                <div class="px-2 mt-8" id="details">
                    <fieldset class="space-y-2">
                        <div class="flex">
                            <label for="">Location</label>
                            @if (!empty($_SERVER['HTTPS'])) {
                            <button onclick="getLocation()"  type="button" class="inline-flex items-center px-3 py-1 ml-4 text-sm font-medium text-gray-600 bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <!-- Heroicon name: mini/envelope -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2 text-red-500">
                                    <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                  </svg>
                                  
                                Get Current Location
                              </button>
                            @else
                            <p class="self-end text-xs text-red-600">*Cannot fetch your current location because of http issue.</p>
                            @endif
                        </div>
                        <input type="text" class="w-full bg-white border-gray-300 rounded-md" x-model="address" placeholder="Enter your address here">
                    </fieldset>
                    <fieldset class="mt-2">
                        <label for="">Write Description</label>
                        <textarea wire:model="description" class="w-full mt-2 border-gray-200 rounded-md" rows="3"></textarea>
                    </fieldset>
                    <fieldset class="px-4 mt-4">
                        <label for="" class="flex items-center gap-4">
                            <input type="checkbox" x-model="enable">
                            <span>I have agreed to <a href="{{ url('terms') }}" class="underline" target="_blank">Terms and Conditions</a></span>
                        </label>
                    </fieldset>
                    <div class="flex mt-8">
                        <button type="submit" class="block w-full btn-primary" :class="enable ? '' : 'opacity-50 cursor-not-allowed'" x-on:disabled="!enable">Submit Report</button>
                    </div>
                </div>
            </form>
        </div>
        @else
        <div class="mx-auto lg:w-3/4">
            <div class="p-8 bg-white border-2 border-green-300 rounded-lg shadow-lg">
                <h3 class="text-3xl font-bold text-center">Report submitted succesfully!</h3>
                <div class="flex justify-center mt-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-32 h-32 text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                      </svg>
                </div>
                <div class="flex justify-center mt-8">
                    <a href="{{ url('my-reports') }}" class="btn-primary">View Reports</a>
                </div>
            </div>
        </div>
        @endif

    </div>
</div>

@push('scripts')
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ config('services.google.key') }}"></script>

<script>

    document.addEventListener('livewire:load', function () {
        // getLocation();
    })
    
    
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        console.log( "Geolocation is not supported by this browser.");
      }
    }
    
    function showPosition(position) {
        @this.setGeolocation(position.coords.latitude, position.coords.longitude);
    }

    function getReverseGeocodingData(lat, lng) {
        var latlng = new google.maps.LatLng(lat, lng);
        // This is making the Geocode request
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({ 'latLng': latlng }, function (results, status) {
            if (status !== google.maps.GeocoderStatus.OK) {
                alert(status);
            }
            // This is checking to see if the Geoeode Status is OK before proceeding
            if (status == google.maps.GeocoderStatus.OK) {
                console.log(results);
                var address = (results[0].formatted_address);
            }
        });
    }
    </script>
@endpush