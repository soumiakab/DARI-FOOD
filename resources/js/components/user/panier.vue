<template>


            <div class="col-md-12 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Les plats choisis</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted">{{ plats.length }} Plats</div>
                    </div>
                </div>

                <div v-for="(plat,index) in plats" :key="index" class="row border-top border-bottom" >
                    <panierEl :plat="plat" :platid="plat.id"  @myEvent="getTotal"/>
                </div>

                   <div class="back-to-shop">
                    <a href="/">&leftarrow;<span class="text-muted">Ajouter un autre plat</span></a>

                </div>
                <div class="row mt-2" style=" padding: 2vh 0;">
                    <div class="col">TOTAL :</div>
                    <div class="col text-right">{{total}}DH </div>


                </div>
            </div>

</template>
<script>

export default {
    name:'panier',
    data(){
        return{
            plats:[],
            quantity:1,
            total:0,
        }
    },
    async mounted(){
     await this.getAll();
     await this.getTotal();
    },
    methods:{
        passCommand(){
            if(confirm("vous voulez vraiment passer la commande?")){
                axios.get('/savecommand');

            }

        },
          async getAll(){
            const response = await fetch('/panierData');
            const data = await response.json();
            console.log(data);
            this.plats=data;
            console.log(this.plats);

        },
        async getTotal(){

            const response = await fetch('/total');
            const data = await response.json();
            this.total=data.total;
            this.getAll();
            console.log(this.total);

        },


    },
}
</script>
