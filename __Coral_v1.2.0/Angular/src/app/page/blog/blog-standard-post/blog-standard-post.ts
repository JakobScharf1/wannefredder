import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { ActivatedRoute, RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { BlogDesc } from "../../../components/blog/blog-desc/blog-desc";
import { BlogComments } from "../../../components/blog/blog-comments/blog-comments";
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { Footer } from "../../../components/footer/footer";
import { blogData } from '../../../../data/data';

@Component({
  selector: 'app-blog-standard-post',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    BlogDesc,
    BlogComments,
    SidebarBlog,
    Footer
],
  templateUrl: './blog-standard-post.html',
  styleUrl: './blog-standard-post.scss'
})
export class BlogStandardPost {
  blogData = blogData
  id:any;
  data:any;

  constructor(private route:ActivatedRoute){}

  ngOnInit(): void {
    this.id = this.route.snapshot.params['id'];
    this.data = this.blogData.find((item:any)=>item.id === parseInt(this.id));
  }
}
