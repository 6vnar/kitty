<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">{{__('ui.Brand')}}</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">{{__('ui.Category')}}</button>
        </li>
        
    </ul>
</div>
<div id="myTabContent">
    <div class="hidden p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <livewire:pages.admin.brand.edit  />
    </div>
    <div class="hidden p-4 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <livewire:pages.admin.category.edit />
    </div>
</div>