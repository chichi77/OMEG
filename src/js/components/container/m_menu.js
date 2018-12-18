import React from "react";
import ReactDOM from "react-dom";

class MenuList extends React.Component {
   render() {
      return (
         <div className="col-3 col-sm-3">
            <a href={this.props.data.link}>
               <i className={this.props.data.icon}></i>
               <div>{this.props.data.title}</div>
            </a>
         </div>
      );
   }
}

class M_Menu extends React.Component {
   constructor() {
      super();
      this.state = {
         data: 
         [
            {
               "lnk":"m_repair.php",
               "icon":"fas fa-cog",
               "title": "報修紀錄"
            },
            {
               "link":"m_case.php",
               "icon":"fas fa-city",
               "title": "我的建案"
            },
            {
               "name":"m_edu.php",
               "icon":"fas fa-film",
               "title": "建案教學"
            },
            {
               "name":"m_info.php",
               "icon":"fas fa-pencil-alt",
               "title": "我的帳戶"
            },
         ]
      }
   }
   render() {
      return (
         <div className="row m_menu">
            {this.state.data.map((menu_item, i) => 
            <MenuList key = {i} data = {menu_item} />)}
         </div>
      );
   }
}


export default M_Menu;
ReactDOM.render(<M_Menu/>, document.getElementById('M_Menu'));