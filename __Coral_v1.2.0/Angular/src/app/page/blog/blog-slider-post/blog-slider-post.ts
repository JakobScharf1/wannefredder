import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from '../../../components/navbar/navdark/navdark';
import { BlogDesc } from "../../../components/blog/blog-desc/blog-desc";
import { BlogComments } from "../../../components/blog/blog-comments/blog-comments";
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-blog-slider-post',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    BlogDesc,
    BlogComments,
    SidebarBlog,
    Footer
],
  templateUrl: './blog-slider-post.html',
  styleUrl: './blog-slider-post.scss'
})
export class BlogSliderPost {

}
