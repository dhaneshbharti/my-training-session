<template>
    <div class="p-5">
        <h2 class="text-3xl font-semibold mb-6">here is your chart table: </h2>
        <div class="border-b border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-500">
                <thead class="bg-indigo-50 rounded-t-lg">
                <tr >
                    <td class="px-4 py-3 rounded-tl-lg">Sr.No.</td>
                    <td class="px-4 py-3">First name</td>
                    <td class="px-4 py-3">Last name</td>
                    <td class="px-4 py-3">City</td>
                    <td class="px-4 py-3 rounded-tr-lg">Gender</td>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-500">

                <tr v-for="(item,index) in charttable" >
                    <td>{{index+1}}  </td>
                    <td>{{item.fname}}</td>
                    <td>{{item.lname}}</td>
                    <td>{{item.city}}</td>
                    <td>{{item.gen}}</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "View",
        data(){
            return{
                charttable:[
                    {sno:'1',fname:'dhanesh',lname:'bharti', city:'banglore', gen:'male'},
                    {sno:'1',fname:'dhanesh',lname:'bharti', city:'banglore', gen:'male'},
                    {sno:'1',fname:'jk',lname:'vaishya', city:'mumbai', gen:'male'}
                ] }
        }

    }
</script>

<style scoped>

</style>
