<template>

    <div class="row main align-items-center">

            <div class="col-3">
                <div class="row text-muted align-items-center"><img class="img-fluid" :src="'resource/'+plat.image" alt="platimage"/>{{plat.name}}</div>
            </div>
            <div class="col-2">{{plat.price}} DH</div>
            <div class="col-4"><p><quantite :qty="plat.quantity" @qt="getQt"/></p></div>
            <div class="col-2" >{{subTotal}}</div>
            <div class="col-1" data-id="1"><span class="delet" style="cursor:pointer" @click="removeCom">&#10005;</span></div>
    </div>
</template>
<script>

export default {
    name:'panierEl',
    props:{
        plat:Object,
        platid:Number,
    },
    data(){
        return{
            quantity:1,
            subTotal:0,
        }
    },
    async mounted(){
        this.quantity=this.plat.quantity;
        this.subTotal=this.plat.price;
    },
    methods:{
        getQt(value) {
            this.quantity=value;
        },

        async updateCom(){
            // console.log(this.quantity);
            let response= await axios.post('update-cart',{'platid':this.platid,'quantite':this.quantity});
            console.log(response);
            this.$emit('myEvent');
        },
         async removeCom(){
            let response= await axios.delete('remove-cart',{data:{'platid':this.platid}});
            console.log(response.data);
            this.$emit('myEvent');
            window.location.reload();

        },
    },
    watch:{
        quantity:function(val){
            this.subTotal=val * this.plat.price;
            this.updateCom();
        }
    },
}
</script>

