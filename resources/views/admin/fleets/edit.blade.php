<x-layout.admin>
    <div class="flex flex-wrap items-center justify-between gap-2 mb-6">
        <h6 class="font-semibold mb-0 dark:text-white">Fleet</h6>
        <ul class="flex items-center gap-[6px]">
            <li class="font-medium">
                <a href="{{ route('admin.dashboard.index') }}" class="flex items-center gap-2 hover:text-primary-600 dark:text-white">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li class="dark:text-white">-</li>
            <li class="font-medium dark:text-white">Fleet - Edit</li>
        </ul>
    </div>

    <div class="col-span-12">
        <div class="card border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center flex-wrap gap-3 justify-between">
                <h5 class="card-title text-lg mb-0">Edit Fleet</h5>
                <a href="{{ route('admin.fleets.index') }}" class="btn btn-primary text-sm btn-sm px-3 py-3 rounded-lg flex items-center gap-2">
                    <iconify-icon icon="ion:arrow-back-outline" class="icon text-xl line-height-1"></iconify-icon>
                    BACK
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.fleets.update', $fleet) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-12 gap-4">
                    @csrf
                    @method('PUT')

                    <div class="col-span-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $fleet->title) }}" class="form-control border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" required>
                    </div>

                    <div class="col-span-6">
                        <label for="gltf" class="form-label">GLTF Path</label>
                        <input type="text" id="gltf" name="gltf" value="{{ old('gltf', $fleet->gltf) }}" class="form-control border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" required>
                    </div>

                    <div class="col-span-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" accept="image/*" class="mt-1 border border-neutral-200 dark:border-neutral-600 w-full rounded-lg">
                    </div>

                    <div class="col-span-6">
                        <label for="current-image" class="form-label">Current Image</label>
                        <img src="{{ Storage::url($fleet->image) }}" alt="{{ $fleet->title }}" class="border rounded-lg w-full h-32 object-cover">
                    </div>

                    <div class="col-span-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" required>{{ old('description', $fleet->description) }}</textarea>
                    </div>

                    <div class="col-span-12 grid grid-cols-5 gap-4">
                        <div>
                            <label for="practice_range" class="form-label">Practice Range</label>
                            <input type="text" id="practice_range" name="practice_range" value="{{ old('practice_range', $fleet->practice_range) }}" class="form-control border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" required>
                        </div>

                        <div>
                            <label for="cruise_speed" class="form-label">Cruise Speed</label>
                            <input type="text" id="cruise_speed" name="cruise_speed" value="{{ old('cruise_speed', $fleet->cruise_speed) }}" class="form-control border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" required>
                        </div>

                        <div>
                            <label for="maximum_speed" class="form-label">Maximum Speed</label>
                            <input type="text" id="maximum_speed" name="maximum_speed" value="{{ old('maximum_speed', $fleet->maximum_speed) }}" class="form-control border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" required>
                        </div>

                        <div>
                            <label for="normal_takeoff_weight" class="form-label">Normal Takeoff Weight</label>
                            <input type="text" id="normal_takeoff_weight" name="normal_takeoff_weight" value="{{ old('normal_takeoff_weight', $fleet->normal_takeoff_weight) }}" class="form-control border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" required>
                        </div>

                        <div>
                            <label for="max_takeoff_weight" class="form-label">Max Takeoff Weight</label>
                            <input type="text" id="max_takeoff_weight" name="max_takeoff_weight" value="{{ old('max_takeoff_weight', $fleet->max_takeoff_weight) }}" class="form-control border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" required>
                        </div>
                    </div>

                    <div class="col-span-6 flex items-center">
                        <label class="inline-flex items-center cursor-pointer">
                            <!-- Hidden input for status -->
                            <input type="hidden" name="status" value="0"> <!-- default to 0 (inactive) -->

                            <!-- Checkbox for status -->
                            <input type="checkbox" id="status" name="status" value="1" class="sr-only peer" {{ old('status', $fleet->status) ? 'checked' : '' }}>
                            <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                            <span class="line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300">
                                Status
                            </span>
                        </label>
                    </div>

                    <div class="col-span-6 flex justify-end">
                        <button type="submit" class="btn px-3 py-3 text-sm btn-sm bg-green-500 text-white rounded-lg flex items-center hover:bg-green-600 transition">
                            UPDATE
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout.admin>
