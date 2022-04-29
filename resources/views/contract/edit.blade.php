<x-app-layout>
  <x-slot name="header">
    Edycja kontraktu
  </x-slot>
  <x-contracts-list :activeId="$contract->id" />


  <div class="w-full">
    <x-contract.tab-nav :id="$contract->id" />


    <div class="px-4">
      <form>
        <div class="grid grid-cols-12 gap-5 md:gap-2">
          <div class="col-span-2 2xl:col-span-1">
            <x-ui.input-text label="ID" :value="$contract->id" disabled class="cursor-not-allowed" />
          </div>
          <div class="col-span-10 2xl:col-span-3">
            <x-ui.input-text label="Prefix" :value="getContractPrefix($contract)" disabled class="cursor-not-allowed" />
          </div>
          <div class="col-span-12 2xl:col-span-8">
            <x-ui.input-text label="Skórcona nazwa" :value="$contract->shortName" />
          </div>

          <div class="col-span-12">
            <div class="relative mt-5 bg-secondary-100">
              <textarea name="" id="" cols="" rows="5"
                class="peer z-20 w-full border p-2 text-base text-gray-500 outline-none focus:border-b-2 focus:border-b-primary-500 focus:ring-0 focus:outline-none border-secondary-300 focus:border-secondary-300 bg-transparent indent-0"
                placeholder="">{{$contract->taskName}}</textarea>
              <label for=""
                class="absolute left-2 origin-[0] -translate-y-3 transform bg-inherit px-3 text-sm font-semibold text-gray-400 transition-all peer-placeholder-shown:z-10 peer-placeholder-shown:translate-y-2 peer-focus:z-10 peer-focus:-translate-y-3"
                onclick="this.previousElementSibling.focus()">Nazwa zadania</label>
            </div>
          </div>

          <div class="col-span-12 2xl:col-span-2">
            <x-ui.input-text label="Numer umowy" :value="$contract->contractNumber" />
          </div>
          <div class="col-span-12 2xl:col-span-2 md:col-span-6">
            <x-ui.input-text label="Data rozpoczęcia" :value="$contract->startTime" />
          </div>
          <div class="col-span-12 2xl:col-span-2 md:col-span-6">
            <x-ui.input-text label="Data zakończenia" :value="$contract->stopTime" />
          </div>
          <div class="col-span-12 2xl:col-span-3 md:col-span-6">
            <div class="relative mt-5 bg-secondary-100">
              <select name="contractStage" id=""
                class="peer z-20 w-full border p-2 text-base text-gray-500 outline-none focus:border-b-2 focus:border-b-primary-500 focus:ring-0 focus:outline-none border-secondary-300 focus:border-secondary-300 bg-transparent indent-0">
                @foreach(getAllStageContract() as $key => $stage)
                @if($key)
                <option value="{{$key}}" {{ ($key  == $contract->contractStageId) ?  'selected' : '' }}>{{$stage}}
                </option>
                @endif
                @endforeach
              </select>
              <label for=""
                class="absolute left-2 origin-[0] -translate-y-3 transform bg-inherit px-3 text-sm font-semibold text-gray-400 transition-all peer-placeholder-shown:z-10 peer-placeholder-shown:translate-y-2 peer-focus:z-10 peer-focus:-translate-y-3"
                onclick="this.previousElementSibling.focus()">Status kontraktu</label>
            </div>
          </div>
          <div class="col-span-12 2xl:col-span-3 md:col-span-6">
            <div class="relative mt-5 bg-secondary-100">
              <select name="contractStudy" id=""
                class="peer z-20 w-full border p-2 text-base text-gray-500 outline-none focus:border-b-2 focus:border-b-primary-500 focus:ring-0 focus:outline-none border-secondary-300 focus:border-secondary-300 bg-transparent indent-0">
                @foreach(getAllStudyContract() as $key => $study)
                <option value="{{$key}}" {{ ($key  == $contract->contractStudyId) ?  'selected' : '' }}>{{$study}}
                </option>
                @endforeach
              </select>
              <label for=""
                class="absolute left-2 origin-[0] -translate-y-3 transform bg-inherit px-3 text-sm font-semibold text-gray-400 transition-all peer-placeholder-shown:z-10 peer-placeholder-shown:translate-y-2 peer-focus:z-10 peer-focus:-translate-y-3"
                onclick="this.previousElementSibling.focus()">Stadium kontraktu</label>
            </div>
          </div>

        </div>

        <button type="submit"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-10">Submit</button>
      </form>
    </div>

  </div>


</x-app-layout>
