<template>
    <div>
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>

                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>

                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex-shrink-0 flex items-center">
                            <img class="block lg:hidden h-8 w-auto" src="https://d3ag9sk63msume.cloudfront.net/project-assets/images/white-logo.png" alt="Workflow">
                            <img class="hidden lg:block h-8 w-auto" src="https://d3ag9sk63msume.cloudfront.net/project-assets/images/white-logo.png" alt="Workflow">
                        </div>
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">
                                <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">View notifications</span>

                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>


                        <div class="ml-3 relative">
                            <div>
                                <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://d3ag9sk63msume.cloudfront.net/project-assets/images/our-team/nitish.jpg" alt="">
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="sm:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">

                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
                </div>
            </div>
        </nav>
    </div>
<!--   Starting Table-->

    <div class="p-10">
        <h2 class=" font-semibold mb-6">Here is your  Table: </h2>
        <div class="border-b border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-500">
                <thead class="bg-indigo-50 rounded-t-lg text-blue-500">
                <tr >
                    <td class="px-4 py-3 rounded-tl-lg">Product Name</td>
                    <td class="px-4 py-3">Product type</td>
                    <td class="px-4 py-3">Product ID</td>
                    <td class="px-4 py-3">Product MFG</td>
                    <td class="px-4 py-3 rounded-tr-lg">Product EXP</td>
                    <td class="px-4 py-3">Model</td>
                    <td class="px-4 py-3 rounded-tr-lg">Company</td>
<!--                    <td class="px-4 py-3 rounded-tr-lg">Gender</td>-->
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-500">

                <tr  v-for="(item,index) in charttable" >
                    <td class="ml-3">{{index+1}}  </td>
                    <td class="ml-3">{{item.product_ID}}</td>
                    <td class="ml-3">{{item.product_name}}</td>
                    <td class="ml-3">{{item.product_type}}</td>
                    <td class="ml-3">{{item.Manufactring_date}}</td>
                    <td class="ml-3">{{item.product_company}}</td>
                    <td class="ml-3">{{item.expiry_date}}</td>
                    <td class="ml-3">{{item.product_model}}</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name:"View2",
        data(){
            return{
                charttable:[]
            }
        },
        methods:{
            fetchList(){
                axios.post('/api/product/view').then(response =>{
                    if(response.status === 200){
                        this.charttable = response.data.data
                    }
                })
            }
        },
        created() {
            this.fetchList();

        }
    }

</script>

<style scoped>

</style>
