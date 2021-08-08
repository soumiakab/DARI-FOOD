<template>
<div class="container-fluid cont">
    <div class="row">
      <div class="col-12">
        <ul class="nav" >
            <li class="nav-item categorie m-2 btn btn-danger "  @click="categ('')">
                Tout
            </li>
            <li  v-for="cat in categories" v-bind:key="cat.id" class="nav-item categorie m-2 btn filter" @click="categ(cat.name)">
                {{cat.name}}
            </li>
            <!-- <li class="nav-item categorie  m-2 btn filter">
                pastilas
            </li>
            <li class="nav-item categorie  m-2 btn filter">
                boissants
            </li>
            <li class="nav-item categorie  m-2 btn filter">Salades Marocaines</li>
            <li class="nav-item categorie  m-2 btn filter">Sucre</li>
            <li class="nav-item categorie  m-2 btn filter">briouats</li>
            <li class="nav-item categorie  m-2"></li>
            <li class="nav-item categorie  m-2"></li>
            <li class="nav-item categorie  m-2"></li>
            <li class="nav-item categorie  m-2"></li>
            <li class="nav-item categorie  m-2"></li>
            <li class="nav-item categorie  m-2"></li>
            <li class="nav-item categorie  m-2"></li> -->
          </ul>
      </div>
      <div class="col-3"></div>

    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div  v-for="plat in filterPlatsByCategory" v-bind:key="plat.id" class="col-lg-3 col-md-6 col-sm-10 mt-5 offset-md-0 offset-sm-1">
                    <div class="card">
                        <a style="padding:0;" :href="'user/platdetails/'+plat.id" >

                        <img class="card-img-top" style="width:100%;height: 200px;" :src="'resource/'+plat.imag"/>
                        </a>
                        <div class="card-body">
                            <div class="d-flex">
                            {{plat.category.name}} /{{plat.nbr_pers}} personnes  </div>
                            <h5><b>{{plat.name.substr(0, 15)}} ...</b><a href="#" style="color:red;float:right"><i class="fa fa-heart-o"  @click.prevent="ajouterWish(plat.id)"></i></a> </h5>
                            <div class="d-flex flex-row my-2">
                                <div class="text-muted">{{plat.price}}DH</div>

                               <quantite :qty="quantity" @qt="getQt"/>
                            </div>
                        <input type="hidden" name="_token" value="csrf_token()">

                        <p class="btn-holder"><a href="#"  @click.prevent="ajouter(plat.id)" class="btn btn-danger btn-block text-center" role="button">Ajouter au panier</a> </p>
                        <!-- <button class="btn w-100 rounded my-2">Ajouter au panier</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
// import { defineComponent } from '@vue/composition-api'

export default {
    name:'plats',
    props: ['addRoute'],
    data(){
        return{
            plats:[],
            categories:[],
            quantity:1,
            category:'',
        }
    },

    async mounted(){
     await this.getAll();
     await this.getAllCat();
    },

    methods:{
        async getAll(){
            const response = await fetch('http://127.0.0.1:8000/plats');
            const data = await response.json();
            console.log(data);
            this.plats=data;
            console.log(this.plats[0].id);

        },
         async getAllCat(){
            const response = await fetch('http://127.0.0.1:8000/category');
            const data = await response.json();
            console.log(data);
            this.categories=data;
            console.log(this.categories[0].id);

        },
        async ajouter(x){
            let response= await axios.post('/addcart',{'platid':x,'quantite':this.quantity});
            console.log(response);
            window.location.reload();
            // this.$forceUpdate();

        },
        async ajouterWish(x){
            let response= await axios.post('/addwish',{'platid':x});
            console.log(response);
            window.location.reload();
            // this.$forceUpdate();

        },
         getQt(value) {
             //get component value
            this.quantity=value;
        },
        categ(val){
            this.category=val;
        },
        platdetails(){

        },
    },
    computed: {
            filterPlatsByCategory: function(){
                return this.plats.filter(plat => !plat.category.name.indexOf(this.category))
            }
        }

}
</script>
