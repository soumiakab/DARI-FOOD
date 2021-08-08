<template>

    <div class="row main align-items-center">
            <div class="col-2"><img class="img-fluid" :src="'resource/'+plat.imag" alt="platimage"/></div>
            <div class="col">
                <div class="row text-muted">{{plat.name}}</div>
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
            window.location.reload();

        },
    },
}
</script>

