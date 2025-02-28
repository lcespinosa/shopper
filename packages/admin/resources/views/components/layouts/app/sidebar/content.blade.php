<div {{ $attributes }}>
    <div class="h-1 rounded-lg bg-gradient-to-br from-primary-600 to-primary-100 dark:to-primary-600/10"></div>
    <div class="flex h-full flex-col">
        <div class="px-4 py-5">
            <div
                class="relative flex items-start rounded-lg bg-white px-3 py-2.5 shadow-sm ring-1 ring-gray-200 dark:bg-white/5 dark:ring-gray-800"
            >
                <x-shopper::link class="shrink-0" href="{{ route('shopper.dashboard') }}">
                    <x-shopper::brand class="h-8 w-auto" />
                    <span class="absolute inset-0"></span>
                </x-shopper::link>
                <div class="ml-3 truncate">
                    <h4 class="truncate font-heading text-sm font-medium leading-4 text-gray-900 dark:text-white">
                        {{ shopper_setting('name') }}
                    </h4>
                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        {{ shopper_setting('email') }}
                    </span>
                </div>
            </div>
        </div>
        <div class="flex flex-1 flex-col justify-between overflow-hidden">
            <div class="h-full flex-1 overflow-y-scroll">
                <x-shopper::layouts.app.sidebar.secondary />
            </div>

            <div class="space-y-2 border-t border-gray-200 p-4 dark:border-gray-700">
                @can('access_setting')
                    <x-shopper::link
                        href="{{ route('shopper.settings.index') }}"
                        @class([
                            'sh-sidebar-item',
                            'sh-sidebar-item-active' => request()->routeIs('shopper.settings*'),
                            'sh-sidebar-item-inactive' => ! request()->routeIs('shopper.settings*'),
                        ])
                    >
                        <x-untitledui-sliders class="mr-2 h-5 w-5" stroke-width="1.5" aria-hidden="true" />
                        {{ __('shopper::pages/settings/global.menu') }}
                    </x-shopper::link>
                @endcan

                <a href="https://laravelshopper.dev" target="_blank" class="sh-sidebar-item sh-sidebar-item-inactive">
                    <x-untitledui-code-browser class="mr-2 h-5 w-5" stroke-width="1.5" aria-hidden="true" />
                    {{ __('shopper::pages/dashboard.cards.doc_title') }}
                </a>
            </div>
        </div>
    </div>
</div>
