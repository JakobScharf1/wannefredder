import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogStandardPost } from './blog-standard-post';

describe('BlogStandardPost', () => {
  let component: BlogStandardPost;
  let fixture: ComponentFixture<BlogStandardPost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogStandardPost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogStandardPost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
