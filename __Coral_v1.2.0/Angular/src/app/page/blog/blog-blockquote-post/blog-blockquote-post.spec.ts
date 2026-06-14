import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogBlockquotePost } from './blog-blockquote-post';

describe('BlogBlockquotePost', () => {
  let component: BlogBlockquotePost;
  let fixture: ComponentFixture<BlogBlockquotePost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogBlockquotePost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogBlockquotePost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
