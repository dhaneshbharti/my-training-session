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
    <!--starting starting form-->
    <div class="p-10 " >
        <div v-if="error_message">{{ error_message }}</div>
        <form method="POST" class=" bg-white ">
            <div class="grid grid-cols-2 gap-6" >
                <div class="w-full">
                    <label class="rounded text-blue-500">Product Name</label>
                    <input v-model="product_name" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text">
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Product Type</label>
                    <input v-model="product_type" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text">
                </div>
                <!--                <div class="w-full">-->
                <!--                    <label class="rounded text-blue-500">Product ID</label>-->
                <!--                    <input v-model="product_id" type="number" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">-->
                <!--                </div>-->
                <div class="w-full">
                    <label class="rounded text-blue-500">Product MFG</label>
                    <input v-model="manufacturing_date" type="date" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Product EXP</label>
                    <input v-model="expiry_date" type="date" placeholder="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                </div>
                <div>
                    <label class=" text-blue-500 sm-bold  " >
                        Select Peripherls
                    </label>
                    -                <div class="mt-2">
                    <Multiselect
                        v-model="multiselect_example"
                        :options="options"
                        placeholder="Select one or more"
                        mode="tags"
                        :searchable="true"
                        :createTag="true"
                    />
                </div>
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Model</label>
                    <select v-model="product_model" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                        <option selected value="">Select One</option>
                        <option v-for="(item,index) in myDropdown" >{{item.name}}</option>
                    </select>
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Company</label>
                    <select v-model="product_company" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                        <option selected value="">Select One</option>
                        <option v-for="(item,index) in myDropdown2" >{{item.name}}</option>
                    </select>
                </div>
               <div style="padding-top:30px; padding-left:100px;">
                   <button  type="submit" @click.prevent="submit"  class="bg-blue-500 rounded bg-cover border-2 p-1  text-white ">UPDATE</button>
               </div>
               </div>

        </form>
    </div>

</template>

<script>
    import  Multiselect  from  '@vueform/multiselect';
    import axios from 'axios'
    import ProductInput from "@/components/productInput";
    import NoeticSingleSelect from "@/components/NoeticSingleSelect";

    export default
    {
        name: "Updatepro",
        components: {NoeticSingleSelect, ProductInput,Multiselect},
        props:['page'],
        data()
        {
            return{
                product_id :'',
                product_name:'',
                product_type:'',
                manufacturing_date:'',
                expiry_date:'',
                product_company:'',
                product_model:'',
                multiselect_example:[],
                tags:'tags',

                errors: {},
                error_message: '',
                myDropdown: [
                    {id: 1, name:'J7'},
                    {id: 2,name:'J2'},
                    {id: 3,name:'J5'},
                    {id: 4,name:'J6'},
                ],
                myDropdown2:[
                    {id: 1,name:'Micromax'},
                    {id: 2,name:'Samsung'},
                    {id: 3,name:'Gen'},
                    {id: 4,name:'Intex'},
                ],
                options: [
                    {value: 1, label:'Battery'},
                    {value: 2, label:'Headphone'},
                    {value: 3, label:'Backcover'},
                    {value: 4, label:'Chager'},
                ],

            }
        },
        methods: {
            submit() {
                const payload = {
                        id: this.aproduct_id,
                        product_name: this.product_name,
                        product_type: this.product_type,
                        manufacturing_date: this.manufacturing_date,
                        product_company: this.product_company,
                        expiry_date: this.expiry_date,
                        product_model: this.product_model,
                        // peripherals: this.multiselect_example,
                    }
                axios.post('/api/update', payload).then(response =>
                     {
                        if(response.status === 200)
                            {
                               this.$inertia.get('/view2');
                            }
                     })

            }
        },
        created() {
            // console.log(this.page);
                this.aproduct_id=this.page.id,
                this.product_name = this.page.product_name,
                this.product_type = this.page.product_type,
                this.manufacturing_date = this.page.manufacturing_date,
                this.product_company = this.page.product_company,
                this.expiry_date = this.page.expiry_date,
                this.product_model = this.page.product_model
                // this.peripherals= this.page.multiselect_example
        }



    }

</script>

<style src="@vueform/multiselect/themes/default.css"></style>


