import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogLeftSidebarPost } from './blog-left-sidebar-post';

describe('BlogLeftSidebarPost', () => {
  let component: BlogLeftSidebarPost;
  let fixture: ComponentFixture<BlogLeftSidebarPost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogLeftSidebarPost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogLeftSidebarPost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
