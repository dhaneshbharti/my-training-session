<template>
    <div class="p-5">
        <h2 class="text-3xl font-semibold mb-6">here is your chart table: </h2>
        <div class="border-b border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-500">
                <thead class="bg-indigo-50 rounded-t-lg">
                <tr >
                    <td class="px-4 py-3 rounded-tl-lg">id</td>
                    <td class="px-4 py-3 rounded-tl-lg">Email</td>
                    <td class="px-4 py-3">password</td>
                    <td class="px-4 py-3">operation</td>
                    <td class="px-4 py-3">operation</td>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-500">

                    <tr v-for="(ele, index) in tableData" >
                        <td>{{index+1}}  </td>
                        <td>{{ele.email}}</td>
                        <td>{{ele.password}}</td>
                        <td><a href="#" @click="done(ele.id)">Delete</a></td>
                        <td>
                            <a :href="'/user/update/'+ele.id">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "user/show",
        data(){
            return{
                tableData:[]
            }
        },
        methods:{
            fetchList(){
                axios.get('/api/employee/show').then(response =>{
                    if(response.status === 200){
                        this.tableData = response.data.data
                    }
                })
            },
            done(id){
                axios.get('/api/employee/delete/'+id).then(response =>{
                    if(response.status === 200){
                        this.fetchList();
                    }
                })
            }
        },
        created() {
            this.fetchList();

        },
    }
</script>

<style scoped>

</style>
