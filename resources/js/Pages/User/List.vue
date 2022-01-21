<template>
    <input  class="mt-1 ml-12" type="text" placeholder="search"><button type="submit"><i  class="fa fa-search border p-3 bg-blue-500"></i></button>
    <div class="text-center font-semibold mt-5 " ><i> This are Users Data</i>

    <div class="p-10">
        <table class="border-collapse  border   shadow-md  w-full">
            <thead class="border-1 rounded bg-blue-500 table-sortable text-white">
            <tr class="font-semiboldbold ">
                <td class="p-3" > Roll. No.<i class="fa fa-sort" style="font-size:16px"></i> </td>
                <td> student Name <i class="fa fa-sort" style="font-size:16px"></i></td>
                <td> Father name <i class="fa fa-sort" style="font-size:16px"></i> </td>
                <td>  Standard <i class="fa fa-sort" style="font-size:16px"></i></td>
                <td> phone <i class="fa fa-sort" style="font-size:16px"></i></td>
                <td> Address <i class="fa fa-sort" style="font-size:16px"></i></td>
                <td> Gender <i class="fa fa-sort" style="font-size:16px"></i></td>
                <td> Edit <i class="fa fa-sort" style="font-size:16px"></i></td>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(ele, index) in tableData" class="border h-10" >
                <td class="p-2">{{ele.roll_number}}</td>
                <td>{{ele.student_name}} </td>
                <td>{{ele.father_name}}</td>
                <td>{{ele.class}}</td>
                <td>{{ele.phone_no}}</td>
                <td>{{ele.address}}</td>
                <td>{{ele.gender}}</td>
            </tr>
            </tbody>

        </table>
    </div>
</div>
</template>

<script>
    export default {
        name: "user -date",
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
            }
        },
        created() {
            this.fetchList();

        }
    }
</script>

<style scoped>

</style>
