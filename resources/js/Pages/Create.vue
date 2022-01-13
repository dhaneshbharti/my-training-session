<template>
    <div class="p-10">
        <h2 class="text-3xl font-semibold mb-6">Registration Form</h2>
        <form>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <noetic-inputs label="First Name" :v_model="fname" placeholder="First Name"></noetic-inputs>
                </div>
                <div>
                    <noetic-inputs label="Last Name" :v_model="lname" placeholder="Last Name"></noetic-inputs>
                </div>
                <div>
                    <noetic-inputs label="Last Name"></noetic-inputs>
                </div>
                <div>
                    <noetic-single-select label="city" :dropdown="myDropdown" placeholder="Select your city"></noetic-single-select>
                </div>
                <div>
                    <noetic-single-select label="District" :dropdown="myDropdown" placeholder="Select your district"></noetic-single-select>
                </div>
                <div>
                    <noetic-inputs></noetic-inputs>
                </div>
                <div class="w-full">
                    <label>last name</label>
                    <input class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" type="text" placeholder="enter your name">
                    <span class="text-red-500 text-xs italic">This is required field</span>
                </div>
                <div class="w-full">
                    <label>city</label>
                    <select  class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
                        <option > Select your city </option>
                        <option> mumbai </option>
                        <option> bhopal </option>
                        <option selected> banglore </option>
                        <option> hyderabad </option>
                        <option> pune </option>
                    </select>
                </div>
                <div class="w-full">
                    <label>Gender</label>
                    <div class="w-full mt-2 flex justify-between items-center">
                        <div class="flex items-center">
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
                <button class="bg-blue-500 text-white px-10 py-3 text-base font-medium rounded-md">Submit</button>
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
                fname:'Dhanesh',
                lname:'Lorem ipsum',
                myDropdown:[
                    {name:'Mumbai'},
                    {name:'Mumbai'},
                    {name:'Pune'},
                    {name:'Hyderabad'},
                    {name:'Indore'},
                ]
            }
        }
    }
</script>

<style scoped>

</style>


