<div class="py-12">
    <div x-data="{ type: null }"
        x-effect="console.log(type)"
        class="wrapper">
        <header>
            <h1 class="text-3xl font-bold">Report an Emergency</h1>
        </header>
        <div class="mt-8">
            <div class="grid grid-cols-2 gap-2 lg:grid-cols-6 lg:gap-6">
                <label 
                    :class="type === 'fire' ? ' bg-red-500 scale-100 text-white' :  'duration-300 ease-in scale-90 text-red-700' "
                    class="flex flex-col items-center justify-center gap-3 p-8 bg-white border rounded-lg cursor-pointer hover:scale-100">
                    <x-heroicon-s-fire class="w-10 h-10 "/>
                    <p :class="type === 'fire' ? 'text-white font-bold' : 'text-gray-700' ">Fire</p>
                    <input type="radio" x-model="type" value="fire" class="hidden">
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
            <div class="px-2 mt-8">
                <fieldset>
                    <label for="">Write Description</label>
                    <textarea class="w-full mt-2 border-gray-200 rounded-md" rows="5"></textarea>
                </fieldset>
                <fieldset class="px-4 mt-4">
                    <label for="" class="flex items-center gap-4">
                        <input type="checkbox" name="" id="">
                        <span>I have agree to Terms and Conditions</span>
                    </label>
                </fieldset>
                <div class="flex mt-8">
                    <button class="btn-primary">Submit Report</button>
                </div>
            </div>
        </div>
    </div>
</div>