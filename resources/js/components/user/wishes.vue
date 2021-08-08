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
                    <wishEl :plat="plat" :platid="plat.id" />
                </div>

                   <div class="back-to-shop">
                    <a href="/">&leftarrow;<span class="text-muted">Ajouter un autre plat</span></a>

                </div>

            </div>

</template>
<script>

export default {
    name:'panier',
    data(){
        return{
            plats:[],
        }
    },
    async mounted(){
     await this.getAll();
    },
    methods:{
          async getAll(){
            const response = await fetch('/wishesData');
            const data = await response.json();
            console.log(data);
            this.plats=data;
            console.log(this.plats);

        },



    },
}
</script>
