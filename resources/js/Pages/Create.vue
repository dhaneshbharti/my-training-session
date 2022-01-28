<template>
    <div class="p-10">
        <h2 class="text-3xl font-semibold mb-6">Registration Form</h2>
        <form>
            <div class="grid grid-cols-2 gap-6 text-blue-500">
                <div>
                    <noetic-inputs label="First Name" :v_model="fname" placeholder="First Name"></noetic-inputs>
                </div>
                <div>
                    <noetic-inputs label="Last Name" :v_model="lname" placeholder="Last Name"></noetic-inputs>
                </div>
                <div>
                    <noetic-single-select label="city" :v_model="city" :dropdown="myDropdown" placeholder="Select your city"></noetic-single-select>
                </div>
                <div>
                    <noetic-single-select label="District" :v_model="District" :dropdown="myDropdown" placeholder="Select your district"></noetic-single-select>
                </div>
                <div class="w-full">
                    <label class="text-blue-500">State</label>
                    <select :v-model="state" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                        <option > Select your State </option>
                        <option> Madhya pradesh </option>
                        <option> Maharashtral </option>
                        <option selected>Gujrat </option>
                        <option> Rajshthan </option>
                        <option> Delhi </option>
                    </select>
                </div>
                <div class="w-full">
                    <label class="text-blue-500">country</label>
                    <select  :v_model="country" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                        <option > Select your country </option>
                        <option> India </option>
                        <option> Russia </option>
                        <option > Japan </option>
                        <option> Bangladesh </option>
                        <option> Turkey </option>
                    </select>
                </div>
                <div class="w-full">
                    <label class="text-blue-500">Gender</label>
                    <div class="w-full mt-2 flex justify-between items-center">
                        <div :v_model="Gender"  class="flex items-center">
                            <input class="mr-1.5" type="radio">
                            <span class="text-sm font-normal text-gray-700">Male</span>
                        </div>
                        <div class="flex items-center">
                            <input class="mr-1.5" type="radio">
                            <span class="text-sm font-normal text-gray-700">Female</span>
                        </div>
                        <div class="flex items-center">
                            <input class="mr-1.5" type="radio">
                            <span class="text-sm font-normal text-gray-700">Other</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex justify-center mt-8">
                <button @click.prevent="submit" class="bg-blue-500 text-white px-10 py-3 text-base font-medium rounded-md">Submit</button>
            </div>
    </form>
    </div>
</template>

<script>
    import NoeticInputs from "../components/NoeticInputs";
    import NoeticSingleSelect from "../components/NoeticSingleSelect";
    export default {
        name: "Create",
        components: {NoeticSingleSelect, NoeticInputs},
        data(){
            return{
                fname:'',
                lname:'',
                errors:{},
                error_massage:'',
                City:'',
                State:'',
                Country:'',
                myDropdown:[
                    {name:'Mumbai'},
                    {name:'Mumbai'},
                    {name:'Pune'},
                    {name:'Hyderabad'},
                    {name:'Indore'},
                    this.error_massage='',
                    this.errors={},

                ]
            }
        },
        methods:{
            submit()
            {
                const payload={
                    First_name:this.fname,
                    Last_name:this.lname,
                    City:this.city,
                    District:this.District,
                    State:this.state,
                    // Gender:this.Gender,
                    Country:this.country,

                }
                console.log('Check');
                axios.post('/api/Store/View2', payload).then(response =>{
                    if(response.status === 200){
                        this.$inertia.get('/user/list');
                    }
                })
            }

        }
    }
</script>

<style scoped>

</style>


