import{_ as z,d as j,c as r,a as e,b as l,e as y,w as k,T as q,i as u,g as p,v as f,j as I,o,p as w,k as C,l as T,n as L,F as _,r as g,t as h,f as E,m as O,h as M,U as V}from"./maska-8590b9dc.js";import{c as A,a as S}from"./index.esm-0ed190eb.js";import"./bootstrap-c75e0372.js";const F={name:"Modal",data(){return{requestData:{service:"furniture",furniture:{type:"sofa",count:1,seats:1,size:"small"},name:"",email:"",phone:""}}}},n=a=>(w("data-v-356bcf4e"),a=a(),C(),a),N={class:"modal fade",id:"requestModal","data-bs-backdrop":"static","data-bs-keyboard":"false",tabindex:"-1","aria-labelledby":"staticBackdropLabel","aria-hidden":"true"},Q={class:"modal-dialog modal-dialog-centered modal-lg"},U={class:"modal-content"},H=n(()=>e("div",{class:"modal-header"},[e("h1",{class:"modal-title fs-5",id:"staticBackdropLabel"},"Оставить заявку на оказание услуги"),e("button",{type:"button",class:"btn-close","data-bs-dismiss":"modal","aria-label":"Close"})],-1)),B={class:"modal-body overflow-hidden"},K={class:"row"},$={class:"col"},J=n(()=>e("p",{class:"fw-bold text-dark mb-2"},"Какая услуга вас интересует?",-1)),P={class:"form-group"},G=n(()=>e("label",{for:"name",class:"form-label d-block mb-1"},"Услуга",-1)),R={class:"btn-group mb-3"},Y={key:0},W={class:"form-group"},X=n(()=>e("label",{for:"name",class:"form-label d-block mb-1"},"Тип мебели",-1)),Z={class:"btn-group mb-3"},ee={key:0,class:"form-group"},te=n(()=>e("label",{for:"count",class:"form-label d-block mb-1"},"Количество предметов",-1)),se={class:"d-flex"},ie=["disabled"],ae=["disabled"],re={key:1,class:"mb-3"},oe={class:"form-group mb-3"},ne=n(()=>e("label",{for:"count",class:"form-label d-block mb-1"},"Количество мест",-1)),le={class:"d-flex"},ue=["disabled"],de=["disabled"],ce={key:0,class:"form-group overflow-hidden"},me=n(()=>e("label",{for:"size",class:"form-label d-block mb-1"},"Размер",-1)),pe={class:"btn-group mb-3"},fe={class:"col"},ve=I('<p class="fw-bold text-dark mb-2" data-v-356bcf4e>Контактные данные:</p><div class="form-group" data-v-356bcf4e><label for="phone" class="form-label" data-v-356bcf4e>Имя</label><input type="text" class="form-control" id="phone" required data-v-356bcf4e></div><div class="form-group" data-v-356bcf4e><label for="email" class="form-label" data-v-356bcf4e>Email</label><input type="text" class="form-control" id="email" required data-v-356bcf4e></div>',3),be={class:"form-group"},_e=n(()=>e("label",{for:"phone",class:"form-label"},"Телефон",-1)),ge=n(()=>e("div",{class:"modal-footer"},[e("button",{type:"submit",class:"btn btn-primary"},"Отправить")],-1));function he(a,t,d,c,s,m){const b=j("maska");return o(),r("div",N,[e("div",Q,[e("div",U,[H,e("form",null,[e("div",B,[e("div",K,[e("div",$,[J,e("div",P,[G,e("div",R,[e("button",{class:l([{active:s.requestData.service=="furniture"},"btn btn-sm btn-outline-primary"]),type:"button",onClick:t[0]||(t[0]=i=>s.requestData.service="furniture")},"Химчистка мебели",2),e("button",{class:l([{active:s.requestData.service=="carpet"},"btn btn-sm btn-outline-primary"]),type:"button",onClick:t[1]||(t[1]=i=>s.requestData.service="carpet")},"Химчистка ковров",2)])]),s.requestData.service=="furniture"?(o(),r("div",Y,[e("div",W,[X,e("div",Z,[e("button",{type:"button",class:l(["btn btn-sm btn-outline-primary",{active:s.requestData.furniture.type=="sofa"}]),onClick:t[2]||(t[2]=i=>s.requestData.furniture.type="sofa")},"Диван",2),e("button",{type:"button",class:l(["btn btn-sm btn-outline-primary",{active:s.requestData.furniture.type=="chair"}]),onClick:t[3]||(t[3]=i=>s.requestData.furniture.type="chair")},"Стул/ Кресло",2),e("button",{type:"button",class:l(["btn btn-sm btn-outline-primary",{active:s.requestData.furniture.type=="matress"}]),onClick:t[4]||(t[4]=i=>s.requestData.furniture.type="matress")},"Матрац",2)])]),y(q,{"enter-active-class":"animate__animated animate__fadeInLeft","leave-active-class":"animate__animated animate__fadeOutLeft",mode:"out-in"},{default:k(()=>[s.requestData.furniture.type=="chair"?(o(),r("div",ee,[te,e("div",se,[e("button",{type:"button",disabled:s.requestData.furniture.count==1,class:"btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center",style:{width:"40px",height:"30px","border-radius":"5px 0 0 5px"},onClick:t[5]||(t[5]=i=>s.requestData.furniture.count--)},"-",8,ie),p(e("input",{type:"text",class:"form-control w-25 text-center rounded-0",id:"count",style:{"border-color":"rgb(9, 189, 150)",height:"30px"},"onUpdate:modelValue":t[6]||(t[6]=i=>s.requestData.furniture.count=i),required:""},null,512),[[f,s.requestData.furniture.count]]),e("button",{type:"button",disabled:s.requestData.furniture.count==10,class:"btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center",style:{width:"40px",height:"30px","border-radius":"0 5px 5px 0"},onClick:t[7]||(t[7]=i=>s.requestData.furniture.count++)},"+",8,ae)])])):s.requestData.furniture.type=="sofa"||s.requestData.furniture.type=="matress"?(o(),r("div",re,[e("div",oe,[ne,e("div",le,[e("button",{type:"button",disabled:s.requestData.furniture.seats==1,class:"btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center",style:{width:"40px",height:"30px","border-radius":"5px 0 0 5px"},onClick:t[8]||(t[8]=i=>s.requestData.furniture.seats--)},"-",8,ue),p(e("input",{type:"text",class:"form-control w-25 text-center rounded-0",id:"count",style:{"border-color":"rgb(9, 189, 150)",height:"30px"},"onUpdate:modelValue":t[9]||(t[9]=i=>s.requestData.furniture.seats=i),required:""},null,512),[[f,s.requestData.furniture.seats]]),e("button",{type:"button",disabled:s.requestData.furniture.seats==10,class:"btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center",style:{width:"40px",height:"30px","border-radius":"0 5px 5px 0"},onClick:t[10]||(t[10]=i=>s.requestData.furniture.seats++)},"+",8,de)])]),y(q,{"enter-active-class":"animate__animated animate__fadeInLeft","leave-active-class":"animate__animated animate__fadeOutLeft",mode:"out-in"},{default:k(()=>[s.requestData.furniture.type=="sofa"?(o(),r("div",ce,[me,e("div",pe,[e("button",{type:"button",class:l(["btn btn-sm btn-outline-primary",{active:s.requestData.furniture.size=="small"}]),onClick:t[11]||(t[11]=i=>s.requestData.furniture.size="small")},"Малый",2),e("button",{type:"button",class:l(["btn btn-sm btn-outline-primary",{active:s.requestData.furniture.size=="medium"}]),onClick:t[12]||(t[12]=i=>s.requestData.furniture.size="medium")},"Средний",2),e("button",{type:"button",class:l(["btn btn-sm btn-outline-primary",{active:s.requestData.furniture.size=="large"}]),onClick:t[13]||(t[13]=i=>s.requestData.furniture.size="large")},"Большой",2)])])):u("",!0)]),_:1})])):u("",!0)]),_:1})])):u("",!0)]),e("div",fe,[ve,e("div",be,[_e,p(e("input",{type:"text",class:"form-control",id:"phone","onUpdate:modelValue":t[14]||(t[14]=i=>s.requestData.phone=i),"data-maska":"+7 (###) ###-##-##",required:""},null,512),[[f,s.requestData.phone],[b]])])])])]),ge])])])])}const ye=z(F,[["render",he],["__scopeId","data-v-356bcf4e"]]),ke=Object.freeze(Object.defineProperty({__proto__:null,default:ye},Symbol.toStringTag,{value:"Module"}));const xe={name:"QuizCleanKirov",mounted(){this.restartQuiz(),this.dynamicHeight=this.$refs.quizStep1.offsetHeight+"px"},data(){return{furnitureType:this.getFurnitureType(),furnitureSize:this.getFurnitureSize(),additionalInfo:this.getAdditionalInfo(),currentStep:1,orderData:{additionalInfo:[]},dynamicHeight:"auto",formSchema:A({name:S().required("Имя обязательно"),phone:S().required("Телефон обязателен").min(18,"Телефон должен быть валидным")}),formErrors:[],loading:!1}},computed:{},methods:{getFurnitureType(){return[{title:"Химчистка мебели",type:"sofa",image:"/sites/assets/cleankirov/images/u1.jpg"},{title:"Химчистка матрасов",type:"mattress",image:"/sites/assets/cleankirov/images/u4.jpg"},{title:"Химчистка стульев/кресел",type:"chair",image:"/sites/assets/cleankirov/images/u3.jpg"},{title:"Химчистка ковров",type:"carpet",image:"/sites/assets/cleankirov/images/u2.jpg"}]},getFurnitureSize(){return{sofa:[{title:"2-х местный диван(~120 см)",value:"small",image:"/sites/assets/cleankirov/images/u5.jpg"},{title:"Трехместный диван, нераскладной (~180 см)",value:"medium",image:"/sites/assets/cleankirov/images/u6.jpg"},{title:"Диван-книжка (~200 см)",value:"large",image:"/sites/assets/cleankirov/images/u7.jpg"},{title:"Угловой диван с выдвижным спальным местом",value:"extra-large",image:"/sites/assets/cleankirov/images/u8.jpg"},{title:"Диван двухместный с выдвижным спальным местом",value:"extra-large",image:"/sites/assets/cleankirov/images/u9.jpg"},{title:"Трехместный диван с раскладным матрасом (матрас тоже нужно чистить)",value:"extra-large",image:"/sites/assets/cleankirov/images/u10.jpg"},{title:"П-образный диван или любой другой более 5 посадочных мест",value:"extra-large",image:"/sites/assets/cleankirov/images/u11.jpg"}],mattress:[{title:"Односпальный матрас (шириной до 80 см)",value:"small",image:"/sites/assets/cleankirov/images/u12.jpg"},{title:"Полуторный матрас (шириной до 120 см)",value:"medium",image:"/sites/assets/cleankirov/images/u13.jpg"},{title:"Двуспальный матрас (шириной до 160 см)",value:"large",image:"/sites/assets/cleankirov/images/u14.jpg"},{title:"King size (ширина 180-220 см)",value:"extra-large",image:"/sites/assets/cleankirov/images/u15.jpg"},{title:"Матрас грудничка (в люльку)",value:"extra-large",image:"/sites/assets/cleankirov/images/u16.jpg"}],chair:[{title:"Стул с деревянной спинкой",value:"small",image:"/sites/assets/cleankirov/images/u17.jpg"},{title:"Стул с тканевым сидением и спинкой",value:"small",image:"/sites/assets/cleankirov/images/u18.jpg"},{title:"Кресло стандартных размеров",value:"small",image:"/sites/assets/cleankirov/images/u19.jpg"},{title:"Объемное кресло",value:"small",image:"/sites/assets/cleankirov/images/u20.jpg"},{title:"Компьютерное кресло",value:"small",image:"/sites/assets/cleankirov/images/u21.jpg"}],carpet:[{title:"Синтетический ковер с коротким ворсом",value:"small",image:"/sites/assets/cleankirov/images/u22.jpg"},{title:"Шерстяной ковер с коротким ворсом",value:"medium",image:"/sites/assets/cleankirov/images/u23.jpg"},{title:"Ковер с высоким ворсом (шегги)",value:"large",image:"/sites/assets/cleankirov/images/u24.jpg"},{title:"Ковролин с коротким ворсом",value:"extra-large",image:"/sites/assets/cleankirov/images/u25.jpg"},{title:"Ковролин с высоким ворсом",value:"extra-large",image:"/sites/assets/cleankirov/images/u26.jpg"}]}},getAdditionalInfo(){return[{title:"Пыль",value:"dust",val_ru:"Пыль"},{title:"Грязь",value:"dirt",val_ru:"Грязь"},{title:"Кровь",value:"blood",val_ru:"Кровь"},{title:"Краска",value:"paint",val_ru:"Краска"},{title:"Чернила",value:"ink",val_ru:"Чернила"},{title:"Пластилин или лизун",value:"putty_or_slime",val_ru:"Пластилин или лизун"},{title:"Моча",value:"urine",val_ru:"Моча"},{title:"Плесень",value:"mold",val_ru:"Плесень"}]},restartQuiz(){this.currentStep=1,this.furnitureType=this.getFurnitureType(),this.furnitureSize=this.getFurnitureSize(),this.additionalInfo=this.getAdditionalInfo(),this.orderData={additionalInfo:[]}},manageAdditionalInfo(a){this.orderData.additionalInfo.findIndex(t=>t===a)===-1?this.orderData.additionalInfo.push(a):this.orderData.additionalInfo=this.orderData.additionalInfo.filter(t=>t!==a)},sendOrderData(){this.formErrors=[],this.formSchema.validate(this.orderData,{abortEarly:!1}).then(a=>{this.loading=!0,this.orderData.company_id=5,this.orderData.type=this.furnitureType,this.orderData.request_data=JSON.stringify(this.orderData),console.log(JSON.stringify(this.orderData)),axios.post("/api/action/create-client-request/5",this.orderData).then(t=>{console.log(t)}).catch(t=>{console.log(t)}).finally(()=>{this.loading=!1})}).catch(a=>{this.formErrors=a.inner.map(t=>t.path)})},updateInputs(){let a=this.$refs.quizStep4.querySelectorAll("input");a.length>0&&a.forEach(t=>{t.classList.remove("is-invalid"),this.formErrors.findIndex(d=>d===t.id)!==-1&&t.classList.add("is-invalid")})}},watch:{currentStep(){this.$nextTick(()=>{this.dynamicHeight=this.$refs[`quizStep${this.currentStep}`].offsetHeight+"px"})},formErrors(){this.updateInputs(),console.log(this.formErrors)}}},v=a=>(w("data-v-b1f5a825"),a=a(),C(),a),De={key:0,class:"row",ref:"quizStep1"},qe=["onClick"],Se=["src"],ze={class:"text-light"},je={key:1,class:"row",ref:"quizStep2"},we=["onClick"],Ce=["src"],Ie={class:"text-light"},Te={key:2,class:"row",ref:"quizStep3"},Le={class:"col-12 mb-4"},Ee={class:"d-flex flex-wrap gap-2"},Oe=["id","onClick"],Me=["for"],Ve={class:"col-12"},Ae={key:3,class:"row",ref:"quizStep4"},Fe={class:"col-12 col-md-6"},Ne=v(()=>e("h5",{class:"text-light"},"Оставьте контактные данные и мы свяжемся с вами для уточнения деталей заказа",-1)),Qe={class:"form-group mb-3"},Ue=v(()=>e("label",{for:"name",class:"form-label"},"Имя",-1)),He=["disabled"],Be={class:"form-group mb-3"},Ke=v(()=>e("label",{for:"phone",class:"form-label"},"Телефон",-1)),$e=["disabled"],Je={class:"d-flex gap-2 mb-3"},Pe=["disabled"],Ge={key:0},Re=v(()=>e("i",{class:"fa fa-spinner fa-spin"},null,-1)),Ye=[Re],We={key:1},Xe=v(()=>e("i",{class:"fa fa-arrow-left"},null,-1));function Ze(a,t,d,c,s,m){const b=j("maska");return o(),r("div",{class:"quiz-container",ref:"quizContainer",style:L({height:s.dynamicHeight})},[y(T,{"enter-active-class":"animate__animated animate__fadeInRight","leave-active-class":"animate__animated animate__fadeOutLeft"},{default:k(()=>[s.currentStep===1?(o(),r("div",De,[(o(!0),r(_,null,g(s.furnitureType,i=>(o(),r("div",{class:"col",key:i.title},[e("div",{class:"quiz-item cursor-pointer",onClick:D=>{s.currentStep=2,s.orderData.furnitureType=i.title,s.furnitureType=i.type}},[e("img",{src:i.image,alt:"",class:"img-fluid rounded"},null,8,Se),e("h5",ze,h(i.title),1)],8,qe)]))),128))],512)):u("",!0),s.currentStep===2?(o(),r("div",je,[(o(!0),r(_,null,g(s.furnitureSize[s.furnitureType],i=>(o(),r("div",{class:"col",key:i},[e("div",{class:"quiz-item cursor-pointer",onClick:D=>{s.currentStep=3,s.orderData.furnitureSize=i.title}},[e("img",{src:i.image,alt:"",class:"img-fluid rounded"},null,8,Ce),e("h5",Ie,h(i.title),1)],8,we)]))),128))],512)):u("",!0),s.currentStep===3?(o(),r("div",Te,[e("div",Le,[e("div",Ee,[(o(!0),r(_,null,g(s.additionalInfo,i=>(o(),r("div",{key:i},[e("input",{type:"checkbox",class:"btn-check",id:i.value,autocomplete:"off",onClick:D=>m.manageAdditionalInfo(i.val_ru)},null,8,Oe),e("label",{class:"btn btn-outline-primary",for:i.value},h(i.val_ru),9,Me)]))),128))])]),e("div",Ve,[e("button",{class:"btn btn-outline-light",onClick:t[0]||(t[0]=i=>s.currentStep=4)},"Далее")])],512)):u("",!0),s.currentStep===4?(o(),r("div",Ae,[e("div",Fe,[Ne,e("form",{onSubmit:t[4]||(t[4]=E((...i)=>m.sendOrderData&&m.sendOrderData(...i),["prevent"]))},[e("div",Qe,[Ue,p(e("input",{type:"text",class:"form-control",id:"name","onUpdate:modelValue":t[1]||(t[1]=i=>s.orderData.name=i),disabled:s.loading},null,8,He),[[f,s.orderData.name]])]),e("div",Be,[Ke,p(e("input",{type:"text",class:"form-control",id:"phone","data-maska":"+7 (###) ###-##-##","onUpdate:modelValue":t[2]||(t[2]=i=>s.orderData.phone=i),disabled:s.loading},null,8,$e),[[b],[f,s.orderData.phone]])]),e("div",Je,[e("button",{class:"btn btn-light",disabled:s.loading},[s.loading?(o(),r("span",Ge,Ye)):(o(),r("span",We,"Отправить"))],8,Pe),e("button",{class:"btn btn-outline-light",type:"button",onClick:t[3]||(t[3]=i=>m.restartQuiz())},[Xe,O(" В начало ")])])],32)])],512)):u("",!0)]),_:1})],4)}const et=z(xe,[["render",Ze],["__scopeId","data-v-b1f5a825"]]),tt=Object.freeze(Object.defineProperty({__proto__:null,default:et},Symbol.toStringTag,{value:"Module"})),x=M({data(){return{observer:null,sections:null}},mounted(){this.init()},methods:{init(){console.log("cleankirov app init");const a=document.querySelector("#header");window.addEventListener("scroll",()=>{window.scrollY>100?a.classList.add("header-scrolled"):a.classList.remove("header-scrolled")}),window.addEventListener("DOMContentLoaded",()=>{if(this.sections=document.querySelectorAll("section"),this.sections.length===0){console.error("No sections found to observe.");return}this.sections.forEach(t=>{t.style.opacity=0}),this.observer=new IntersectionObserver(t=>{t.forEach(d=>{if(d.isIntersecting){let c=d.target;c.classList.contains("animate__animated")||(c.style.opacity=1,c.querySelector(".container").classList.add("animate__animated","animate__fadeInUp"))}})},{root:null,rootMargin:"0px",threshold:.1}),this.sections.forEach(t=>{this.observer.observe(t)})})}}});x.directive("maska",V);Object.entries(Object.assign({"./Modal.vue":ke,"./QuizCleanKirov.vue":tt})).forEach(([a,t])=>{x.component(a.split("/").pop().replace(/\.\w+$/,""),t.default)});x.mount("#app");