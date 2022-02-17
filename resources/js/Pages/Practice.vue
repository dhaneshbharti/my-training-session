<template>
    <div class="p-2 bg-gray">
        <h3 class="text-blue-500 text-center">Dhanesh groccery system</h3>
        <div>
            <div class="w-full">
                    <label class="rounded text-blue-500">Worker</label>
                    <select v-model="Worker" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                        <option selected value="">Select One</option>
                        <option v-for="item in optionWorker" :value="item.id" :key="item.id">{{item.Name}}</option>
                    </select>
                </div>
                <div class="w-full">
                    <label class="rounded text-blue-500">Role</label>
                    <select v-model="Role" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                        <option selected value="">Select One</option>
                        <option v-for="item in optionRole" :value="item.id" :key="item.id" >{{item.Name}}</option>
                    </select>
                </div>
                <div style="padding-top:30px; padding-left:100px;">
                <button  @click.prevent="submit"  class="bg-blue-500 rounded bg-cover border-2 p-1  text-white">SUBMIT </button>
                </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios'
   

    export default {
        name: "Practice",
        data(){
            return{
                optionWorker:[],
                optionRole:[],
                Worker:'',
                Role:'',
                
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
        methods:{
            getWorker(){
         axios.get('/api/dhanesh/').then(response => {
             if(response.status === 200) {
                 this.optionRole = response.data.data
             }
         })
            },
           getRole(){
                axios.get('/api/dhaneshyr/'+this.worker_role).then(response => {
                    if(response.status === 200) {
                        this.optionWorker = response.data.data
                    }
                })
           
        
       },
            submit(){
                const payload ={
                    
                }
                axios.post('/api/product/create', payload).then(response =>{
                    if(response.status === 200){
                        this.$inertia.get('/view2');
                    }

                }).catch((error) => {
                    console.log(error.response)
                    if(error.response.status === 422) {
                        this.error_message = error.response.data.message;
                        this.errors = error.response.data.errors
                        console.log(this.errors.product_name[0])
                    }
                })
            }
        },
        created(){
            this.getWorker();
             this.getModel();
        },
        watch:{
    //    'multiselect_example':{
    //         handler:'getModel'
    //    },
        'product_model':{
            handler:'getWorker'
        
        }   }

    }

</script>

