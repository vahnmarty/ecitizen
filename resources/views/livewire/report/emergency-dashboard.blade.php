<div x-data="{ 
    x: 8.1794359,
    y: 124.217642,
    initMap(){
        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
        const myLatLng = { lat: 8.23285, lng: 124.24146 };
        const map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: myLatLng
        });
      
        new google.maps.Marker({
          position: myLatLng,
          map,
        });
    },
    setMap(latitude, longitude){
        latitude = Number(latitude);
        longitude = Number(longitude);

        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
        var source = new google.maps.LatLng(this.x, this.y );
        var target = new google.maps.LatLng(latitude, longitude);
        var mapOptions = {
            zoom: 14,
            center: target
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var request = {
            origin: source,
            destination: target,
            travelMode: 'DRIVING'
        };
        directionsService.route(request, function(response, status) {
          if (status == 'OK') {
            directionsRenderer.setDirections(response);
          }
        });
        directionsRenderer.setMap(map);
    },
    openGoogleMap(address){
        var url = 'https://www.google.com/maps/dir';
        var latlng = this.x + ',' + this.y;
        var to = address;
        var link = url + '/' + latlng + '/' + address;
        window.open(link);
    }
}" x-init="initMap">
 

    <div id="map" class="w-full h-screen"></div>

    <div class="fixed inset-y-0 pl-32 left-0 min-w-[16rem] bg-transparent py-12 max-h-screen overflow-auto">
        <div class="grid grid-cols-1 gap-6">
            @foreach($alerts as $alert)
            <div x-on:click="openGoogleMap(`{{ $alert->address }}`)" class="p-5 shadow-lg rounded-md  bg-white w-[28rem] cursor-pointer">
                <div class="flex gap-8">
                    <div class="space-y-1">
                        <p class="font-bold">Alert #{{ $alert->id }}</p>
                        <div class="flex w-full space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-green-600">
                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                              </svg>
                            <p>{{ $alert->address }}</p>
                        </div>
                        <div class="flex w-full space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              
                              
                            <p>{{ $alert->created_at->format('h:i a')  . '(' . $alert->created_at->diffForHumans() . ')' }}</p>
                        </div>
                        <div class="flex w-full space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                              </svg>
                            <p>{{ $alert->user->name }}</p>
                        </div>
                        <div class="flex space-x-2 text-left">
                            <div class="w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 grow">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                  </svg>
                            </div>
                            <div>
                                <div class="">
                                    {{ $alert->description }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-14 h-14">
                        @if($alert->type->is(\App\Enums\EmergencyType::Fire))
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-red-700 w-14 h-14 grow animate-pulse">
                            <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177A7.547 7.547 0 016.648 6.61a.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 011.925-3.545 3.75 3.75 0 013.255 3.717z" clip-rule="evenodd" />
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-blue-700 w-14 h-14 grow animate-pulse">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                          </svg>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')

<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.key') }}"></script>

@endpush