<template>
    <div id="app">
        <div class="header">
            <div class="row contenitore-logo">
                <div class="logo col-5 col-md-2">
                    <img src="/img/fb-biglogo.png" alt="">
                </div>
                <div class="icons-top col-7 col-md-10">
                    <a href="#"><i class="fas fa-search"></i></a>
                    <a href="#"><i class="fas fa-comment"></i></a>
                </div>
            </div>
            <div class="row icons-bottom">
                <div class="col-2 icon-box"><i class="fas fa-home icon"></i></div>
                <div class="col-2 icon-box"><i class="fab fa-youtube icon"></i></div>
                <div class="col-2 icon-box"><i class="fas fa-th-large icon"></i></div>
                <div class="col-2 icon-box"><i class="far fa-bell icon"></i></div>
                <div class="col-2 icon-box"><i class="fas fa-bars icon"></i></div>
            </div>
            <div class="row container-input">
                <div class="img-box col-2"></div>
                <div class="input-box col-10">
                    <input type="text" placeholder="A cosa stai pensando?" v-model="newPost" v-on:keyup.enter="postNewPost()">
                </div>
            </div>
            <div class="row bottom-header">
                <div class="col-4 box-bott-icon"><i class="fas fa-video icon icon-left"></i> Live </div>
                <div class="col-4 box-bott-icon"><i class="far fa-images icon icon-center"></i> Foto</div>
                <div class="col-4 box-bott-icon"><i class="fas fa-video icon icon-rigth"></i> Stanze</div>
            </div>
        </div>
        <Main :posts="posts"/>
    </div>
</template>

<script>
import Main from './Main.vue';
    export default {
        components: {
            Main,
        },
        mounted() {
            console.log('Component mounted.')
            this.getPosts();
        },
        data(){
            return {
                posts: [],
                newPost: '',
            }
        },
        methods:{
            getPosts(){
                axios.get('http://127.0.0.1:8000/api/posts').then((response)=>{
                    this.posts = response.data;
                });
            },

            postNewPost(){
                this.posts.push({
                    body: this.newPost,
                });
                this.newPost = '';
            }
        }

    }
</script>

<style lang="scss" scoped>
@import '../../sass/app.scss';
</style>