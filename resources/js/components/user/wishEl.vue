<template>

    <div class="row main align-items-center">
            <div class="col-2"><a style="padding:0;" :href="'user/platdetails/'+plat.id" ><img class="img-fluid" :src="'resource/'+plat.imag" alt="platimage"/></a></div>
            <div class="col">
                <div class="row text-muted"><a style="padding:0;" :href="'user/platdetails/'+plat.id" >{{plat.name}}</a></div>
            </div>
            <div class="col">{{plat.price}} DH</div>
            <div class="col" data-id="1"><span class="delet" style="cursor:pointer" @click="removeWish(plat.id)">&#10005;</span></div>
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

        }
    },
    methods:{
         async removeWish(x){
            let response= await axios.post('/remove-wish',{'platid':x});
            console.log(response.data);
            this.$emit('myEvent');
        },
    },
}
</script>

