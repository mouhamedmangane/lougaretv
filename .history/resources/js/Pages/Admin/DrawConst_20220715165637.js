import { reactive } from "vue";

export default {
    draw_paragraphe:{
        nom:"ParagraheDraw",
        mmodel:{
             cssClass:{
            'font-size':'text-sm',
            'color':'text-neutral-800',
            },
            txt:"my paragraphe"
        }

    },
    draw_titre:{
        nom:"TitreDraw",
        mmodel:{
            cssClass:{
                'font-size':'text-2xl',
                'color':'text-neutral-800',
            },
            niveau:'2',
            txt:reactive("Titre 2")

       }
    },
    draw_image:{
        nom:"ImageDraw",
        mmodel:{
            cssClass:{
           'width':'w-full',
           'height':'',
           }
       }
    },
}