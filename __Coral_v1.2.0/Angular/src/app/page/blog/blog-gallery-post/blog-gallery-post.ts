import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { BlogComments } from "../../../components/blog/blog-comments/blog-comments";
import { BlogDesc } from "../../../components/blog/blog-desc/blog-desc";
import { Footer } from "../../../components/footer/footer";
import { masonaryData } from '../../../../data/data';

@Component({
  selector: 'app-blog-gallery-post',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    SidebarBlog,
    BlogComments,
    BlogDesc,
    Footer
],
  templateUrl: './blog-gallery-post.html',
  styleUrl: './blog-gallery-post.scss'
})
export class BlogGalleryPost {
  images = masonaryData.slice(0,8)
}
