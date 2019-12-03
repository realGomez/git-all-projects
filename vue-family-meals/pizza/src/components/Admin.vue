<template>
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <new-pizza></new-pizza>
        </div>
        <div class="col-sm-12 col-md-4">
            <h3 class="text-muted my-5">菜单</h3>
            <table class="table">
                <thead class="table table-default">
                   <tr>
                       <th>品种</th>
                       <th>删除</th>
                   </tr>
                </thead>
                <tbody v-for="item in menuItems" v-bind:key="item.index">
                  <tr>
                      <th>{{item.name}}</th>
                      <td>
                          <button @click="deleteData(item)" class="btn btn-outline-danger">&times;</button>
                      </td>
                  </tr>

                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import newPizza from './NewPizza'
    export default {
        name: "Admin",
        components:{
            newPizza:newPizza
        },
        data(){
            return {
                name:'k',
                newPizza:'',
                // menuItems:[]
            }
        },
       //  beforeRouteEnter:(to,from,next)=>{
       //
       // },beforeRouteLeave:()=>{
       //
       //      if(conform('leave')==true){
       //
       //      }else{
       //          next(false);
       //      }
       //  }
        created(){
            // fetch("https://pizza-1a216.firebaseio.com/menu.json")
            //     .then(res=>res.json())
            //     .then(data =>{
            //         for(let key in data){
            //             data[key].id = key;
            //             this.menuItems.push(data[key]);
            //         }
            //     });
        },
        computed:{
            menuItems: {

                //vuex

                get(){
                    return this.$store.state.menuItems;
                },
                set(){

                },
            }

        },
        methods:{
            deleteData(item){

                fetch("https://pizza-1a216.firebaseio.com/menu/"+item.id+"/.json",{
                    method:'DELETE',
                    headers:{
                        "Content-Type":"application/json"
                    },
                    body:JSON.stringify(this.newPizza)
                })
                    .then(res=>res.json())
                    .then(()=>{
                        this.$router.push({name:'menuLink'});
                    });
            }
        }

    }
</script>

<style scoped>

</style>