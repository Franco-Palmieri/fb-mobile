<template>
    <div class="main">
      <div class="contenitore">
        <div class="row stories-bar">
          <div class="col-3 box-stories">
            <div class="content-stories">
              <div class="img-box"></div>
            </div>
          </div>
          <div class="col-3 box-stories">
            <div class="content-stories">
              <div class="img-box"></div>
            </div>
          </div>
          <div class="col-3 box-stories">
            <div class="content-stories">
              <div class="img-box"></div>
            </div>
          </div>
          <div class="col-3 box-stories">
            <div class="content-stories">
              <div class="img-box"></div>
            </div>
          </div>
        </div>
      </div>              
      <Card v-for="(post, index) in posts" :key="index"
      :body="post.body"
      :img="post.image"
      />
    </div>
</template>

<script>
import Card from './Card.vue';
export default {
    components: {Card},
    name: 'Main',
    props: {
        posts: Array,
    }
}
</script>

<style lang="scss">
.main{
    background-color: lightgray;
    .contenitore{
      padding-top: 10px;
      .stories-bar{
        background-color: white ;
        padding: 10px 0;
        .box-stories{
          height: 180px;
          .content-stories{
            border: 1px solid lightgray;
            border-radius: 10px;
            background-color: white;
            height: 100%;
            .img-box{
              width: 25px;
              height: 25px;
              margin: 10px 5px;
              border: 2px solid blue;
            }
          }
        }
      }
    }
}
</style>