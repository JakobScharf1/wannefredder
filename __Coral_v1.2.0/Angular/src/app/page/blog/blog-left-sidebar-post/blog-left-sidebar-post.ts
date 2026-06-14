import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from '../../../components/navbar/navdark/navdark';
import { BlogComments } from "../../../components/blog/blog-comments/blog-comments";
import { BlogDesc } from "../../../components/blog/blog-desc/blog-desc";
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-blog-left-sidebar-post',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    BlogComments,
    BlogDesc,
    SidebarBlog,
    Footer
],
  templateUrl: './blog-left-sidebar-post.html',
  styleUrl: './blog-left-sidebar-post.scss'
})
export class BlogLeftSidebarPost {

}
