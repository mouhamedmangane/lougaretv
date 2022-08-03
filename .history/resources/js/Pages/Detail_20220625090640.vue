<template>
      <app-main>

        <container-box class="">
            <div class="grid grid-cols-12 gap-8">
                    <div class="col-start-1  col-end-9">
                        <article-detail />

                    </div>
                    <div class="2xl col-start-9 col-end-13">
                        <!-- <h-ls-cadre-grouper :infos="important" imageSize="pm" textSize="pm"  :estColler="true" class=""/> -->
                        <news-letter class="bg-white p-5 mt-4" />
                        <pub-v-cadre class="pt-4" src="images/testpub/v2.png" />

                    </div>

                </div>
        </container-box>


    </app-main>
</template>

<script>
import ArticleDetail from '@/MyComponent/CadreReel/ArticleDetail.vue'
import ContainerBox from '@/MyComponent/Box/ContainerBox.vue'
import AppMain from '@/Layouts/AppMain.vue'
import NewsLetter from '@/MyComponent/CadreReel/NewsLetter.vue'
import PubVCadre from '@/MyComponent/Cadre/PubVCadre.vue'
import HLsCadreGrouper from '@/MyComponent/Cadre/HLsCadreGrouper.vue'
export default {
  components: {AppMain, ArticleDetail, ContainerBox, NewsLetter, PubVCadre, HLsCadreGrouper },

}
</script>

<style>

</style>
