// import ShowProduct from './component/ShowProduct';
import ShowTiki from './component/ShowTiki';
import show from './component/show';
const routes=[
    {
        path:"/",
        exact:true,
        main:()=><ShowTiki/>
    },
    {
        path:"/admin",
        exact:true,
        main:()=><ShowTiki/>
    }
    
]
export {routes};