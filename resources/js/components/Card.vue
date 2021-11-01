<template>
    <div class="post-area">
        <div class="container">
            <div class="row">
                <div class="col-12 post-container">
                    <div class="post-info">
                        <div class="top-post">
                            <div class="img-box"></div>
                            <div class="user-info">
                                <div>Francesco Palmieri</div>
                                <div class="data-post"></div>
                            </div>
                        </div>
                        <div><i class="fas fa-ellipsis-h icon"></i></div>
                    </div>
                    <div class="post-content"> 
                        <div>{{body}}</div>
                    </div>
                    <div class="post-bottom-likes">
                    <div>{{counter}}</div>
                    </div>
                    <div class="post-bottom-icons row">
                    <div class="col-4 icon-box" v-on:click="counter += 1">
                          <i class="far fa-thumbs-up"></i>
                          Mi piace
                    </div>
                    <div class="col-4 icon-box">
                          <i class="far fa-comment-alt"></i>
                          Commenta
                    </div>
                    <div class="col-4 icon-box">
                          <i class="fas fa-share"></i>
                          Condividi
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Card',
    props:{
        body: String,
        img: String
    },
    data(){
      return{
        counter: 0
      }
    },
    methods:{
    }
}
</script>

<style lang="scss" scoped>
.post-area{
  background-color: white;
  width: 100%;
  .container{
    margin: 10px 0 10px 0;
    .row{
      .post-container{
        padding: 10px 0 0 0;
        .post-info{
          display: flex;
          align-items: center;
          justify-content: space-between;
          .top-post{
            display: flex;
            align-items: center;
            .user-info{
              margin-left: 10px;
              .data-post{
                color: gray;
              }
            }
          }
        }
        .post-content{
          margin: 15px 0 0 0;
          padding: 0 5px;
        }
        .post-bottom-likes{
          color: gray;
          padding-left: 5px;
        }
        .post-bottom-icons{
          padding: 5px;
          border-top: 1px solid lightgray;
          display: flex;
          align-items: center;
          text-align: center;
          .icon-box{
            color: gray;
            &:hover{
              color: #1877F2;
              font-weight: bold;
            }
          }
        }
      }
    }
  }
}

</style>