<x-app-layout>
  <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
    <div class="mb-1 w-full">
      <div class="mb-4">
{{--        <nav class="flex mb-5" aria-label="Breadcrumb">--}}
{{--          <ol class="inline-flex items-center space-x-1 md:space-x-2">--}}
{{--            <li class="inline-flex items-center">--}}
{{--              <a href="#" class="text-gray-700 hover:text-gray-900 inline-flex items-center">--}}
{{--                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>--}}
{{--                Home--}}
{{--              </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--              <div class="flex items-center">--}}
{{--                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
{{--                <a href="#" class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium">Users</a>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--              <div class="flex items-center">--}}
{{--                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
{{--                <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium" aria-current="page">List</span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--          </ol>--}}
{{--        </nav>--}}
        <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">All users</h1>
      </div>
      <div class="sm:flex">
        <div class="hidden sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0">
          <form class="lg:pr-3" action="#" method="GET">
            <label for="users-search" class="sr-only">Search</label>
            <div class="mt-1 relative lg:w-64 xl:w-96">
              <input type="text" name="email" id="users-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Search for users">
            </div>
          </form>
          <div class="flex space-x-1 pl-0 sm:pl-2 mt-3 sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-gray-900 cursor-pointer p-1 hover:bg-gray-100 rounded inline-flex justify-center">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 cursor-pointer p-1 hover:bg-gray-100 rounded inline-flex justify-center">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 cursor-pointer p-1 hover:bg-gray-100 rounded inline-flex justify-center">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 cursor-pointer p-1 hover:bg-gray-100 rounded inline-flex justify-center">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
            </a>
          </div>
        </div>
        <div class="flex items-center space-x-2 sm:space-x-3 ml-auto">
          <button type="button" data-modal-toggle="add-user-modal" class="w-1/2 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center justify-center rounded-lg text-sm px-3 py-2 text-center sm:w-auto">
            <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
            Add user
          </button>
          <a href="#" class="w-1/2 text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center justify-center rounded-lg text-sm px-3 py-2 text-center sm:w-auto">
            <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg>
            Export
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="flex flex-col">
    <div class="overflow-x-auto">
      <div class="align-middle inline-block min-w-full">
        <div class="shadow overflow-hidden">
          <table class="table-fixed min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
            <tr>
              <th scope="col" class="p-4">
                <div class="flex items-center">
                  <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-all" class="sr-only">checkbox</label>
                </div>
              </th>
              <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">
                Name
              </th>
              <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">
                Position
              </th>
              <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">
                Country
              </th>
              <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">
                Status
              </th>
              <th scope="col" class="p-4">
              </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-1" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/neil-sims.png" alt="Neil Sims avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Neil Sims</div>
                  <div class="text-sm font-normal text-gray-500">neil.sims@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Front-end developer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">United States</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-2" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-2" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/roberta-casas.png" alt="Roberta Casas avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Roberta Casas</div>
                  <div class="text-sm font-normal text-gray-500">roberta.casas@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Designer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Spain</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-3" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-3" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/michael-gough.png" alt="Michael Gough avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Michael Gough</div>
                  <div class="text-sm font-normal text-gray-500">michael.gough@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">React developer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">United Kingdom</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-4" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-4" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/jese-leos.png" alt="Jese Leos avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Jese Leos</div>
                  <div class="text-sm font-normal text-gray-500">jese.leos@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Marketing</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">United States</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-5" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-5" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/bonnie-green.png" alt="Bonnie Green avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Bonnie Green</div>
                  <div class="text-sm font-normal text-gray-500">bonnie.green@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">UI/UX Engineer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Australia</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Offline
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-6" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-6" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/thomas-lean.png" alt="Thomas Lean avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Thomas Lean</div>
                  <div class="text-sm font-normal text-gray-500">thomas.lean@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Vue developer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Germany</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-7" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-7" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/helene-engels.png" alt="Helene Engels avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Helene Engels</div>
                  <div class="text-sm font-normal text-gray-500">helene.engels@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Product owner</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Canada</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-8" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-8" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/lana-byrd.png" alt="Lana Byrd avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Lana Byrd</div>
                  <div class="text-sm font-normal text-gray-500">lana.byrd@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Designer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">United States</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-9" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-9" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/leslie-livingston.png" alt="Leslie Livingston avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Leslie Livingston</div>
                  <div class="text-sm font-normal text-gray-500">leslie.livingston@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Web developer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">France</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Offline
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-10" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-10" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/robert-brown.png" alt="Robert Brown avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Robert Brown</div>
                  <div class="text-sm font-normal text-gray-500">robert.brown@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Laravel developer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Russia</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-11" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-11" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/neil-sims.png" alt="Neil Sims avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Neil Sims</div>
                  <div class="text-sm font-normal text-gray-500">neil.sims@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Front-end developer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">United States</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-12" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-12" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/roberta-casas.png" alt="Roberta Casas avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Roberta Casas</div>
                  <div class="text-sm font-normal text-gray-500">roberta.casas@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Designer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Spain</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-13" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-13" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/michael-gough.png" alt="Michael Gough avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Michael Gough</div>
                  <div class="text-sm font-normal text-gray-500">michael.gough@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">React developer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">United Kingdom</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-14" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-14" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/jese-leos.png" alt="Jese Leos avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Jese Leos</div>
                  <div class="text-sm font-normal text-gray-500">jese.leos@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Marketing</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">United States</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-15" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-15" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/bonnie-green.png" alt="Bonnie Green avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Bonnie Green</div>
                  <div class="text-sm font-normal text-gray-500">bonnie.green@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">UI/UX Engineer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Australia</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Offline
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-16" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-16" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/thomas-lean.png" alt="Thomas Lean avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Thomas Lean</div>
                  <div class="text-sm font-normal text-gray-500">thomas.lean@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Vue developer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Germany</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-17" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-17" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/helene-engels.png" alt="Helene Engels avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Helene Engels</div>
                  <div class="text-sm font-normal text-gray-500">helene.engels@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Product owner</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Canada</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-18" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-18" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/lana-byrd.png" alt="Lana Byrd avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Lana Byrd</div>
                  <div class="text-sm font-normal text-gray-500">lana.byrd@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Designer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">United States</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-19" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-19" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/leslie-livingston.png" alt="Leslie Livingston avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Leslie Livingston</div>
                  <div class="text-sm font-normal text-gray-500">leslie.livingston@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Web developer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">France</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Offline
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            <tr class="hover:bg-gray-100">
              <td class="p-4 w-4">
                <div class="flex items-center">
                  <input id="checkbox-20" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                  <label for="checkbox-20" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <img class="h-10 w-10 rounded-full" src="https://demo.themesberg.com/windster/images/users/robert-brown.png" alt="Robert Brown avatar">
                <div class="text-sm font-normal text-gray-500">
                  <div class="text-base font-semibold text-gray-900">Robert Brown</div>
                  <div class="text-sm font-normal text-gray-500">robert.brown@windster.com</div>
                </div>
              </td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Laravel developer</td>
              <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">Russia</td>
              <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900">
                <div class="flex items-center">
                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                </div>
              </td>
              <td class="p-4 whitespace-nowrap space-x-2">
                <button type="button" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit user
                </button>
                <button type="button" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                  <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete user
                </button>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white sticky sm:flex items-center w-full sm:justify-between bottom-0 right-0 border-t border-gray-200 p-4">
    <div class="flex items-center mb-4 sm:mb-0">
      <a href="#" class="text-gray-500 hover:text-gray-900 cursor-pointer p-1 hover:bg-gray-100 rounded inline-flex justify-center">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
      </a>
      <a href="#" class="text-gray-500 hover:text-gray-900 cursor-pointer p-1 hover:bg-gray-100 rounded inline-flex justify-center mr-2">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
      </a>
      <span class="text-sm font-normal text-gray-500">Showing <span class="text-gray-900 font-semibold">1-20</span> of <span class="text-gray-900 font-semibold">2290</span></span>
    </div>
    <div class="flex items-center space-x-3">
      <a href="#" class="flex-1 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center justify-center rounded-lg text-sm px-3 py-2 text-center">
        <svg class="-ml-1 mr-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        Previous
      </a>
      <a href="#" class="flex-1 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center justify-center rounded-lg text-sm px-3 py-2 text-center">
        Next
        <svg class="-mr-1 ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
      </a>
    </div>
  </div>
</x-app-layout>