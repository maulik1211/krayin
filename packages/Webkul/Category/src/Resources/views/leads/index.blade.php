<x-admin::layouts>
    <!-- Page Title -->
    <x-slot:title>
        @lang('admin::app.settings.tasks.index.title')
        </x-slot>

        <div class="flex flex-col gap-4">
            <!-- Header Section -->
            <div class="flex items-center justify-between rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300">
                <div class="flex flex-col gap-2">
                    <div class="flex cursor-pointer items-center">
                        {!! view_render_event('admin.settings.tags.index.breadcrumbs.before') !!}

                        <!-- Breadcrumbs -->
                        <x-admin::breadcrumbs name="settings.tags" />

                        {!! view_render_event('admin.settings.tags.index.breadcrumbs.after') !!}
                    </div>

                    <div class="text-xl font-bold dark:text-white">
                        @lang('admin::app.settings.tags.index.title')
                    </div>
                </div>

                <div class="flex items-center gap-x-2.5">
                    {!! view_render_event('admin.settings.tags.index.create_button.before') !!}

                    <!-- Create button for Tags -->
                    @if (bouncer()->hasPermission('settings.other_settings.tags.create'))
                        <div class="flex items-center gap-x-2.5">
                            <button
                                type="button"
                                class="primary-button"
                                @click="$refs.tagSettings.openModal()"
                            >
                                @lang('admin::app.settings.tags.index.create-btn')
                            </button>
                        </div>
                    @endif

                    {!! view_render_event('admin.settings.tags.index.create_button.after') !!}
                </div>
            </div>

            <v-tag-settings ref="tagSettings">
                <!-- DataGrid Shimmer -->
              <h1>Custom message</h1>
            </v-tag-settings>
        </div>


</x-admin::layouts>
