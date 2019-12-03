<template>
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <table class="table">
                <thead class="thead-default">
                    <tr>
                        <th>尺寸</th>
                        <th>价格</th>
                        <th>加入</th>
                    </tr>
                </thead>
                <tbody v-for="item in menuItems" v-bind:key="item.index">
                    <tr>
                        <th colspan="3"><strong>{{item.name}}</strong></th>
                    </tr>
                    <tr>
                        <th>{{item.option.size}}</th>
                        <th>{{item.option.price}}</th>
                        <th><button @click="addToCart(item,item.option)" class="btn btn-sm btn-outline-success">+</button></th>
                    </tr>
                </tbody>
            </table>
        </div>



        <div class="col-sm-12 col-md-4">

            <div v-if="minicart.length > 0">
                <table class="table">
                    <thead class="thead-default">
                        <tr>
                            <th>数量</th>
                            <th>品种</th>
                            <th>价格</th>
                        </tr>
                    </thead>
                    <tbody v-for="item in minicart" v-bind:key="item.index">
                        <tr>
                            <th>
                                <button @click="decreaseQuantity(item)" class="btn btn-sm">-</button>
                                <span>{{item.quantity}}</span>
                                <button @click="increaseQuantity(item)"  class="btn btn-sm">+</button>
                            </th>
                            <th>{{item.name}}{{item.size}}</th>
                            <th>{{item.price * item.quantity}}</th>
                        </tr>
                    </tbody>
                </table>
                <p>总价：{{totals}}</p>
                <button class="btn btn-success btn-block">提交</button>
            </div>

            <div v-else>
                空
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Menu",
        data(){
            return {

                minicart:[

                ],
                // menuItems:[]
            }
        },
        methods:{
            addToCart:function(item,option){

                var minicarItem = {
                    name:item.name,
                    size:option.size,
                    price:option.price,
                    quantity:1
                };

                if(this.minicart.length>0){
                    let result = this.minicart.filter((item)=>{
                       return (item.name == minicarItem.name && item.price == minicarItem.price);
                    });


                    if(result.length > 0){
                        result[0].quantity ++;
                    }else{
                        this.minicart.push(minicarItem)
                    }

                }else{
                    this.minicart.push(minicarItem)
                }


            },
            decreaseQuantity:function(item){

                item.quantity--;
                if(item.quantity <=0){
                    this.removeItem(item);
                }
            },
            increaseQuantity:function(item){

                item.quantity++;

            },
            removeItem:function (item) {
                console.log(item,this.minicart,this.minicart.indexOf(item));
                this.minicart.splice(this.minicart.indexOf(item),1)
            }
        },
        computed:{
            totals(){

                let totalCost = 0;
                for(let index in this.minicart){
                    let pizzaItem = this.minicart[index];
                    totalCost+=pizzaItem.quantity * pizzaItem.price;
                }

                return totalCost;

            },
            menuItems(){

                //vuex
                return this.$store.state.menuItems;
            }
        },
        created(){
            // fetch("https://pizza-1a216.firebaseio.com/menu.json")
            //     .then(res=>res.json())
            //     .then(data =>{
            //         for(let key in data){
            //             data[key].id = key;
            //             this.menuItems.push(data[key]);
            //         }
            //     });

            //axios
            // this.http.get("/menu.json").then(res=>this.menuItems = res.data);

            //vuex
            this.http.get("/menu.json")
                .then(res=>this.$store.commit("setMenuItems",res.data));

        }
    }
</script>

<style scoped>

</style>