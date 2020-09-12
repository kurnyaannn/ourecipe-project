<div>
    <div class="relative px-4 py-3 my-4 sm:px-8 md:px-16">
        <div class="bg-white px-2 py-2 font-nunito font-semibold rounded-md shadow-md">
            <div class="flex justify-center font-lora font-semibold text-2xl text-teal-600 py-2">
                Add Your Recipe
            </div>
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="lg:grid lg:grid-cols-2">
                    <div class="pl-2 pr-3">
                        <div>
                            <label for="picture">Picture</label>
                            <input wire:model.defer="picture" type="file" class="block">
                            @if ($picture)
                                <div class="block">
                                    Preview
                                    <img src="{{ $picture->temporaryUrl() }}">
                                </div>
                            @endif
                            @error('picture') <span class="error block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="pl-3 pr-2">
                        <div class="py-1">
                            <label for="title" class="block">Title</label>
                            <input wire:model.defer="form.title" type="text" id="title" name="title" class="bg-gray-100 px-2 py-2 font-nunito font-semibold rounded-md border w-full focus:border-teal-400">
                            @error('form.title') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="py-1">
                            <label for="category" class="block">Category</label>
                            <select wire:model.defer="form.category" id="category" name="category" class="bg-gray-100 px-2 py-2 outline-none font-nunito font-semibold rounded-md border w-full focus:border-teal-400">
                                @foreach($category as $c)
                                    <option value="{{$c}}">{{$c}}</option>
                                @endforeach
                            </select>
                            @error('form.category') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="py-1">
                            <label for="duration" class="block">Duration (Minutes)</label>
                            <input wire:model.defer="form.duration" type="number" min="1" id="duration" name="duration" class="bg-gray-100 px-2 py-2 outline-none font-nunito font-semibold rounded-md border w-full focus:border-teal-400">
                            @error('form.duration') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="py-1">
                            <label for="ingredient">Ingredient</label>
                            <textarea wire:model.defer="form.ingredient" class="w-full border border-gray-300 focus:border-teal-400 px-2 py-2 outline-none rounded-md" rows="5"></textarea>
                            @error('form.ingredient') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="py-1">
                            <label for="detail">Detail</label>
                            <textarea wire:model.defer="form.detail" class="w-full border border-gray-300 focus:border-teal-400 px-2 py-2 outline-none rounded-md" rows="5"></textarea>
                            @error('form.detail') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center py-2">
                    <button type="submit" class="bg-teal-400 font-nunito font-semibold text-white px-4 py-1 rounded-md transition transform hover:scale-110 hover:bg-teal-500 duration-300">POST RECIPE</button>
                </div>
            </form>
        </div>
    </div>
</div>