<template>
    <div class="ml-auto">
        <button class="border rounded bg-white sign" @click="moins"><span class="fa fa-minus" id="orange"></span></button>
        <span class="px-sm-1" v-text="qt"></span>
        <button class="border rounded bg-white sign" @click="plus()"><span class="fa fa-plus" id="orange"></span></button>
    </div>
</template>

<script>
    export default {
        name:'quantite',
        props:{
            qty:Number,
        },
        data(){
            return{
                qt:this.qty,
            }
        },
        methods:{
            passqt(){
                this.$emit('qt',this.qt);
            },
            plus(){
                this.qt++;
                this.passqt();
            },
            moins(){
                if(this.qt>1){
                    this.qt--;
                    this.passqt();

                }
            }

        },
    }
</script>
