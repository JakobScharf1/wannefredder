import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexCharity } from './index-charity';

describe('IndexCharity', () => {
  let component: IndexCharity;
  let fixture: ComponentFixture<IndexCharity>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexCharity]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexCharity);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
